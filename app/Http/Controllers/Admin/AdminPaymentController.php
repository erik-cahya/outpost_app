<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentModel;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function index()
    {
        $data['payment'] = PaymentModel::get();
        return view('admin.payment.index', $data);
    }
}
