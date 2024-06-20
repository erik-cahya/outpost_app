<?php

namespace App\Http\Controllers;

use App\Models\CountryModel;
use App\Models\LocationModel;
use App\Models\PaymentModel;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payments.index');
    }

    public function indexCategory($type = null)
    {
        if ($type !== null) {
            $dataService = ServiceModel::where('service_category', $type)->first();
            if (isset($dataService->service_category)) {
                $dataService = ServiceModel::where('service_category', $type)->get();
            } else {
                abort(403, 'DATA NOT FOUND');
            }
        } else {
            $dataService = ServiceModel::get();
        }
        $dataLocation = LocationModel::get();
        $dataCountry = CountryModel::orderBy('name', 'ASC')->get();

        // dd($dataCountry);

        return view('payments.index-category', compact('dataService', 'dataLocation', 'dataCountry'));
    }

    public function payment(Request $request)
    {
        // dd($request->all());

        $location_outpost = LocationModel::where('id', $request->location)->first();

        if ($request->currency == 'USD') {
            $explode = explode('.', $request->amount);
            if (!isset($explode[1])) {
                array_push($explode, '00');
            }
            $total = implode('', $explode);
        } else {
            $total = $request->amount . "00";
        }

        $categoryService = ServiceModel::where('name', $request->services)->first()->service_category;
        $nameService = $categoryService . ' Package - ' . $request->services;
        $customerName = $request->customer_name;

        // dd($location_outpost->name . ' | ' . $nameService);

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => $request->currency,
                        'product_data' => [
                            "name" => $nameService,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'customer_email' =>  $request->email,
            'mode'        => 'payment',
            'payment_intent_data' => [
                'description' => $location_outpost->name . ' | ' . $nameService,
            ],

            'success_url' => route('success') . "?session_id={CHECKOUT_SESSION_ID}",
            // 'cancel_url' => route('success') . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url'  => route('get.payment'),
        ]);

        // dd($session);

        PaymentModel::create([
            'id' => mt_rand(000000, 999999),
            'session_id' => $session->id,
            'stripe_id' => null,
            'customer_name' => $customerName,
            'payment_name' => null,
            'customer_email' => $session->customer_details->email,
            'package_name' => $nameService,
            'currency' => $session->currency,
            'amount_paid' => $request->amount,
            'status' => $session->status,
            'country' => $request->country,
            'mobile' => $request->phone_number,
            'comments' => $request->comment,
        ]);

        // dd($session->url);
        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        // dd($request->all());
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $sessionId = $stripe->checkout->sessions->retrieve($request->session_id);



        // dd($sessionId);
        PaymentModel::where('session_id', $request->session_id)->update([
            'stripe_id' => $sessionId->payment_intent,
            'status' => $sessionId->status,
            'payment_name' => $sessionId->customer_details->name,
        ]);

        $data['data_payment'] = PaymentModel::where('session_id', $request->session_id)->first();
        // dd($data['data_payment']);
        return view('payments.payment-success', $data);
    }

    public function getDataPrice($id)
    {
        $empData['data'] = DB::table('service')
            ->select('idr_price', 'usd_price')
            ->where('name', $id)
            ->get();

        return response()->json($empData);
    }

    public function getDataLocation($id, $category)
    {
        $locationData['data'] = DB::table('service')
            ->select('name')
            ->where('outpost_location_id', $id)->where('service_category', $category)->orderBy('name', 'ASC')
            ->get();

        return response()->json($locationData);
    }
}
