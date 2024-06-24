<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LocationModel;
use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $dataService = ServiceModel::join('outpost_location', 'outpost_location.id', '=', 'service.outpost_location_id')
            ->select('service.*', 'outpost_location.name as outpost_location_name')
            ->get();
        return view('admin.service.index', compact('dataService'));
    }

    public function create()
    {
        $data['dataLocation'] = LocationModel::get();
        return view('admin.service.create', $data);
    }

    public function store(Request $request)
    {
        if ($request->flexible_payment == 'No') {
            $validated = $request->validate([
                'idr_price' => 'required',
                'usd_price' => 'required',
            ]);
        }
        $validated = $request->validate([
            'name' => 'required',
        ], [
            'name.unique' => 'Service data already exists.',
        ]);

        if ($request->idr_price == null) {
            $formatIdrPrice = $request->idr_price;
        } else {
            $formatIdrPrice = str_replace(['.'], '', $request->idr_price);
        }

        ServiceModel::create([
            'id' => mt_rand(100000000000000, 999999999999999),
            'name' => $request->name,
            'service_category' => $request->service_category,
            'outpost_location_id' => $request->outpost_location,
            'flexible_payment' => $request->flexible_payment,
            'idr_price' => $formatIdrPrice,
            'usd_price' => $request->usd_price,
        ]);

        return redirect('/admin/service');
    }

    public function edit($id)
    {
        $dataService = ServiceModel::where('id', $id)->first();
        // dd($dataService);
        $dataLocation = LocationModel::get();


        return view('admin.service.edit', compact('dataService', 'dataLocation'));
    }

    public function update(Request $request, $id)
    {
        if ($request->flexible_payment == 'No') {
            $validated = $request->validate([
                'idr_price' => 'required',
                'usd_price' => 'required',
            ]);
        }
        $nameService = ServiceModel::where('id', $id)->first('name');
        if ($request->name !== $nameService->name) {
            $validated = $request->validate([
                'name' => 'required',
            ], [
                'name.required' => 'Kolom ini harus diisi.',
            ]);
        }

        if ($request->idr_price == null) {
            $formatIdrPrice = $request->idr_price;
        } else {
            $formatIdrPrice = str_replace(['.'], '', $request->idr_price);
        }

        ServiceModel::where('id', $id)->update([
            'name' => $request->name,
            'service_category' => $request->service_category,
            'outpost_location_id' => $request->outpost_location,
            'flexible_payment' => $request->flexible_payment,
            'idr_price' => ($request->flexible_payment == 'Yes' ? null : $formatIdrPrice),
            'usd_price' => ($request->flexible_payment == 'Yes' ? null : $request->usd_price),
        ]);
        return redirect('/admin/service');
    }

    public function destroy($id)
    {
        ServiceModel::destroy($id);
        return redirect('/admin/service');
    }
}
