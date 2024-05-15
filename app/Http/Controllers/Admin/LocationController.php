<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LocationModel;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $dataLocation = LocationModel::get();
        return view('admin.location.index', compact('dataLocation'));
    }

    public function create()
    {
        return view('admin.location.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:outpost_location',
        ], [
            'name.required' => 'Kolom ini harus diisi.',
            'name.unique' => 'Location data already exists.',
        ]);
        LocationModel::create([
            'id' => mt_rand(100000000000000, 999999999999999),
            'name' => $request->name
        ]);

        return redirect('/admin/location');
    }

    public function edit($id)
    {
        $dataLocation = LocationModel::where('id', $id)->first();

        return view('admin.location.edit', compact('dataLocation'));
    }

    public function update(Request $request, $id)
    {
        $nameCountry = LocationModel::where('id', $id)->first('name');
        if ($request->name !== $nameCountry->name) {
            $validated = $request->validate([
                'name' => 'required|unique:outpost_location',
            ], [
                'name.required' => 'Kolom ini harus diisi.',
                'name.unique' => 'Location data already exists.',
            ]);
        }

        LocationModel::where('id', $id)->update([
            'name' => $request->name
        ]);
        return redirect('/admin/location');
    }

    public function destroy($id)
    {
        LocationModel::destroy($id);
        return redirect('/admin/location');
    }
}
