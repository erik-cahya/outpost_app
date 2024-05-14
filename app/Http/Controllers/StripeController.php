<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = 1000000;

        // dd($total);

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'IDR',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total . "00",
                    ],
                    'quantity'   => 1,
                ],

                [
                    'price_data' => [
                        'currency'     => 'IDR',
                        'product_data' => [
                            "name" => 'Data 2',
                        ],
                        'unit_amount'  => $total . "00",
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        // dd($session->url);
        return redirect()->away($session->url);
    }

    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
}
