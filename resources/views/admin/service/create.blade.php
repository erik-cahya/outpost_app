@extends('admin.layouts.master')
@section('css_customize')

@endsection
@section('js_head_customize')
    <script>
        // Fungsi untuk memformat angka menjadi format rupiah
        function formatRupiah(angka) {
            var reverse = angka.toString().split('').reverse().join('');
            var ribuan = reverse.match(/\d{1,3}/g);
            var formatted = ribuan.join('.').split('').reverse().join('');
            return formatted;
        }

        // Fungsi untuk menghapus simbol mata uang dan pemisah ribuan dari string
        function unformatRupiah(rupiah) {
            return rupiah.replace(/^Rp\.|\./g, '');
        }

        // Fungsi untuk memperbarui nilai input saat diketik dengan format rupiah
        function updateRupiah(e) {
            // Ambil nilai input
            let amount = e.target.value;
            // Hapus simbol mata uang dan pemisah ribuan
            amount = unformatRupiah(amount);
            // Format angka dengan format rupiah
            amount = formatRupiah(amount);
            // Assign nilai yang sudah diformat ke dalam input
            e.target.value = amount;
        }
    </script>
@endsection
@section('content')
<div class="main">
    <div class="page-header">
        <div class="breadcrumb">
            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
            <div class="breadcrumb-item"><a href="{{ route('dashboard') }}"> Home </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> Services </a></div>
            <div class="breadcrumb-item"><a href="h-data-table.html"> Create Data Services </a></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Create Data Service</h4>

            <form class="row g-3 mt-4" action="/admin/service" method="POST">
                @csrf

                <div class="col-md-10">
                    <div class="row mb-3">
                        <label for="country_name" class="col-sm-2 col-form-label">Country Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="country_name" name="name" value="{{ old('name') }}" placeholder="Input Name of Service">

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
                                <input class="form-check-input" type="radio" name="service_category" id="service_category1" value="Co-Living" checked>
                                <label class="form-check-label ms-2" for="service_category1">
                                    Co-Living
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="service_category" id="service_category2" value="Co-Working">
                                <label class="form-check-label ms-2" for="service_category2">
                                    Co-Working
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="col-md-10">
                    <fieldset class="row mb-2">
                        <legend class="col-form-label col-sm-2 pt-0">Flexible Payment</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexible_payment" id="flexible_payment1" value="Yes" checked>
                                <label class="form-check-label ms-2" for="flexible_payment1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexible_payment" id="flexible_payment2" value="No">
                                <label class="form-check-label ms-2" for="flexible_payment2">
                                    No
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="col-md-6" id="idr_price_field">
                    <label for="idr_price" class="form-label">IDR Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input type="text" class="form-control" id="idr_price" name="idr_price" placeholder="Masukkan jumlah uang" onkeyup="updateRupiah(event)">
                    </div>
                </div>
                <div class="col-md-6" id="usd_price_field">
                    <label for="usd_price" class="form-label">USD Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">USD</span>
                        <input type="number" class="form-control" id="usd_price" name="usd_price" placeholder="Example input placeholder">
                    </div>
                </div>

                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Add New Service</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js_customize')
@section('js_customize')
<script>
    // Function to show or hide form fields based on the selected radio button
    function toggleFormFields() {
        var idrPriceField = document.getElementById('idr_price_field');
        var usdPriceField = document.getElementById('usd_price_field');

        // Get the selected value of flexible payment radio button
        var flexiblePaymentValue = document.querySelector('input[name="flexible_payment"]:checked').value;

        // Show or hide form fields based on the selected value
        if (flexiblePaymentValue === 'Yes') {
            idrPriceField.style.display = 'block';
            usdPriceField.style.display = 'block';
        } else {
            idrPriceField.style.display = 'none';
            usdPriceField.style.display = 'none';
        }
    }

    // Call the function when the page loads
    document.addEventListener('DOMContentLoaded', function () {
        toggleFormFields();
    });

    // Add event listener to flexible payment radio buttons
    document.querySelectorAll('input[name="flexible_payment"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            toggleFormFields();
        });
    });
</script>
@endsection

@endsection
