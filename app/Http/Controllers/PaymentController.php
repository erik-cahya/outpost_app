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
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => $request->currency,
                        'product_data' => [
                            "name" => $request->services,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('get.payment'),
        ]);

        // dd($session->url);
        return redirect()->away($session->url);
    }

    public function getDataPrice($id)
    {
        $empData['data'] = DB::table('service')
            ->select('idr_price', 'usd_price')
            ->where('name', $id)
            ->get();

        return response()->json($empData);
    }
}
