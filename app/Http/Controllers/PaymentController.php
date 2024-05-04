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

    public function getDataPrice($id)
    {
        $empData['data'] = DB::table('service')
            ->select('idr_price', 'usd_price')
            ->where('name', $id)
            ->get();

        return response()->json($empData);
    }
}
