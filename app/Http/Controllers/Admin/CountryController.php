<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CountryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CountryController extends Controller
{
    public function index()
    {
        $dataCountry = CountryModel::get();
        return view('admin.country.index', compact('dataCountry'));
    }

    public function create()
    {
        return view('admin.country.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:country',
        ], [
            'name.required' => 'Kolom ini harus diisi.',
            'name.unique' => 'Country data already exists.',
        ]);
        CountryModel::create([
            'id' => mt_rand(100000000000000, 999999999999999),
            'name' => $request->name
        ]);

        return redirect('/admin/country');
    }

    public function edit($id)
    {
        $dataCountry = CountryModel::where('id', $id)->first();

        return view('admin.country.edit', compact('dataCountry'));
    }

    public function update(Request $request, $id)
    {
        $nameCountry = CountryModel::where('id', $id)->first('name');
        if ($request->name !== $nameCountry->name) {
            $validated = $request->validate([
                'name' => 'required|unique:country',
            ], [
                'name.required' => 'Kolom ini harus diisi.',
                'name.unique' => 'Country data already exists.',
            ]);
        }

        CountryModel::where('id', $id)->update([
            'name' => $request->name
        ]);
        return redirect('/admin/country');
    }

    public function destroy($id)
    {
        CountryModel::destroy($id);
        return redirect('/admin/country');
    }
}
