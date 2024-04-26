@extends('admin.layouts.master')
@section('css_customize')

@endsection
@section('content')
<div class="main">
    <div class="page-header">
        <div class="breadcrumb">
            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
            <div class="breadcrumb-item"><a href="{{ route('dashboard') }}"> Home </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> Country </a></div>
            <div class="breadcrumb-item"><a href="h-data-table.html"> Edit Data Country </a></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Create Data Country</h4>

            <form class="row g-3 mt-4" action="/admin/country/{{ $dataCountry->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="col-md-6">
                    <label for="country_name" class="form-label">Country Name</label>
                    <input type="text" class="form-control" id="country_name" name="name" value="{{ old('name', $dataCountry->name) }}" placeholder="Input Name of Country">

                    @error('name')
                        <div id="inputDigit-error" class="is-invalid" style="color: #f46363">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Add Country</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js_customize')

@endsection
