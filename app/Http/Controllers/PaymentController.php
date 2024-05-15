<?php

namespace App\Http\Controllers;

use App\Models\CountryModel;
use App\Models\LocationModel;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index($type = null)
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
        $dataCountry = CountryModel::get();

        return view('payments.index', compact('dataService', 'dataLocation', 'dataCountry'));
    }

    public function payment(Request $request)
    {
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

            // 'ui_mode' => 'embedded',
            // 'return_url' => route('success'),

            'success_url' => route('success') . "?session_id={CHECKOUT_SESSION_ID}",
            // 'cancel_url' => route('success') . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url'  => route('get.payment'),
        ]);

        // dd($session->url);
        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        // dd($request->all());
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $sessionId = $stripe->checkout->sessions->retrieve($request->session_id);

        dd($sessionId);
        dd($sessionId->customer_details->name);
        $customer = $stripe->customers->retrieve($sessionId->customer);


        echo "<h1>Thanks for your order, $customer->name!</h1>";

        // $session = \Stripe\Checkout\Session::retrieve($sessionId);
        // $customer = \Stripe\Customer::retrieve($session->customer);

        // dd($customer->name);
        // return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }

    public function getDataPrice($id)
    {
        $empData['data'] = DB::table('service')
            ->select('idr_price', 'usd_price')
            ->where('name', $id)
            ->get();

        return response()->json($empData);
    }

    public function getDataLocation($id)
    {
        $locationData['data'] = DB::table('service')
            ->select('name')
            ->where('outpost_location_id', $id)
            ->get();

        return response()->json($locationData);
    }
}
