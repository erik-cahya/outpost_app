@extends('admin.layouts.master')
@section('css_customize')

@endsection
@section('content')
<div class="main">
    <div class="page-header">
        <div class="breadcrumb">
            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
            <div class="breadcrumb-item"><a href="{{ route('dashboard') }}"> Home </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> Location </a></div>
            <div class="breadcrumb-item"><a href="h-data-table.html"> Create Data Location</a></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Create Data Location</h4>

            <form method="POST" action="/admin/user">
                @csrf

                <div class="form-group mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control no-validation-icon no-success-validation" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control no-validation-icon no-success-validation" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>
                    <input type="password"
                    id="password"
                        class="form-control no-validation-icon no-success-validation"
                        name="password">

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password"
                    id="password_confirmation"
                        class="form-control no-validation-icon no-success-validation"
                        name="password_confirmation">

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                </div>
                <button class="btn btn-primary d-block w-100" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js_customize')

@endsection
