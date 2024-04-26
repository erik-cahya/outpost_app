@extends('admin.layouts.master')
@section('css_customize')

@endsection
@section('content')
<div class="main">
    <div class="page-header">
        <div class="breadcrumb">
            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
            <div class="breadcrumb-item"><a href="{{ route('dashboard') }}"> Home </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> Services </a></div>
            <div class="breadcrumb-item"><a href="h-data-table.html"> Edit Data Services </a></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Edit Data Service</h4>

            <form class="row g-3 mt-4" action="/admin/service/{{ $dataService->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="col-md-10">
                    <div class="row mb-3">
                        <label for="country_name" class="col-sm-2 col-form-label">Country Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="country_name" name="name" value="{{ old('name', $dataService->name) }}" placeholder="Input Name of Country">

                            @error('name')
                                <div id="inputDigit-error" class="is-invalid" style="color: #f46363">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Service Category</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="service_category" id="service_category1" value="Co-Living" {{ $dataService->service_category === 'Co-Living' ? 'checked' : '' }}>
                                <label class="form-check-label ms-2" for="service_category1">
                                    Co-Living
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="service_category" id="service_category2" value="Co-Working" {{ $dataService->service_category === 'Co-Working' ? 'checked' : '' }}>
                                <label class="form-check-label ms-2" for="service_category2">
                                    Co-Working
                                </label>
                            </div>
                        </div>
                    </fieldset>
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
