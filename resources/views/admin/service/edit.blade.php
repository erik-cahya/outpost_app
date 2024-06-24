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
        function keyUpEditRupiah(e) {
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
                        <label for="country_name" class="col-sm-2 col-form-label">Service Name</label>
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

                {{-- Outpost Location --}}
                <div class="col-md-10">
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Outpost Location</legend>
                        <div class="col-md-10">
                            @foreach ($dataLocation as $location)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="outpost_location" id="{{ $location->id }}" value="{{ $location->id }}" {{ $dataService->outpost_location_id == $location->id ? 'checked' : '' }} required>
                                    <label class="form-check-label ms-2" for="{{ $location->id }}">
                                        {{ $location->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                </div>

                <div class="col-md-10">
                    <fieldset class="row mb-2">
                        <legend class="col-form-label col-sm-2 pt-0">Flexible Payment</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexible_payment" id="flexible_payment1" value="Yes" {{ old('flexible_payment') === 'Yes' || $dataService->flexible_payment === 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label ms-2" for="flexible_payment1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexible_payment" id="flexible_payment2" value="No" {{ old('flexible_payment') === 'No' || $dataService->flexible_payment === 'No' ? 'checked' : '' }}>
                                <label class="form-check-label ms-2" for="flexible_payment2">
                                    No
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="col-md-6 mb-3" id="idr_price_field">
                    <label for="idr_price" class="form-label">IDR Price</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input type="text" class="form-control" id="idr_price" name="idr_price" placeholder="Masukkan jumlah uang" value="{{ $dataService->idr_price }}" onkeyup="keyUpEditRupiah(event)">
                    </div>

                    @error('idr_price')
                        <div id="inputDigit-error" class="is-invalid" style="color: #f46363">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" id="usd_price_field">
                    <label for="usd_price" class="form-label">USD Price</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">USD</span>

                        <input type="text" class="form-control" name="usd_price" id="usd_price" onkeypress="return hanyaAngka(event)" value="{{ $dataService->usd_price }}">

                    </div>


                    @error('usd_price')
                        <div id="inputDigit-error" class="is-invalid" style="color: #f46363">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Save Data</button>
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
        if (flexiblePaymentValue === 'No') {
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

<script>
    // Function to update Rupiah format
    function updateRupiah(event) {
        var rupiah = event.target.value;
        // Format Rupiah
        rupiah = formatRupiah(rupiah);
        // Assign the formatted value back to the input field
        event.target.value = rupiah;
    }

    // Function to format Rupiah
    function formatRupiah(angka) {
        var reverse = angka.toString().split('').reverse().join('');
        var ribuan = reverse.match(/\d{1,3}/g);
        var formatted = ribuan.join('.').split('').reverse().join('');
        return formatted;
    }

    // Call the updateRupiah function when the page loads
    window.onload = function() {
        // Get the input element
        var inputIdrPrice = document.getElementById('idr_price');
        // Call the updateRupiah function with the input element as argument
        updateRupiah({ target: inputIdrPrice });
    };
</script>

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        var value = document.getElementById("usd_price").value;

        // Hanya izinkan digit angka, titik (sebagai koma), dan tombol panah navigasi
        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }

        // Pastikan hanya ada satu titik dalam input
        if (charCode == 46 && value.indexOf('.') !== -1) {
            return false;
        }

        return true;
    }
</script>
@endsection

@endsection
