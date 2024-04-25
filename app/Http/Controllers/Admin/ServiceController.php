<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $dataService = ServiceModel::get();
        return view('admin.service.index', compact('dataService'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:service',
        ], [
            'name.required' => 'Kolom ini harus diisi.',
            'name.unique' => 'Service data already exists.',
        ]);
        ServiceModel::create([
            'id' => mt_rand(100000000000000, 999999999999999),
            'name' => $request->name
        ]);

        return redirect('/admin/service');
    }

    public function edit($id)
    {
        $dataService = ServiceModel::where('id', $id)->first();

        return view('admin.service.edit', compact('dataService'));
    }

    public function update(Request $request, $id)
    {
        $nameService = ServiceModel::where('id', $id)->first('name');
        if ($request->name !== $nameService->name) {
            $validated = $request->validate([
                'name' => 'required|unique:location',
            ], [
                'name.required' => 'Kolom ini harus diisi.',
                'name.unique' => 'Service data already exists.',
            ]);
        }

        ServiceModel::where('id', $id)->update([
            'name' => $request->name
        ]);
        return redirect('/admin/service');
    }

    public function destroy($id)
    {
        ServiceModel::destroy($id);
        return redirect('/admin/service');
    }
}
