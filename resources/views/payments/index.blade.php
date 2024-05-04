<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outpost | Payments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Data Mask --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/css/inputmask.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <style>
        input, textarea, select, button{
            border-radius: 0px !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto"> <!-- Menggunakan kelas ms-auto untuk menempatkan menu ke kanan -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Admin Panel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <form>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="mb-3 col-md-6" >
                            <label for="currency" class="form-label">Currency</label>
                            <select class="form-select" id="currency_select">
                                <option value="USD" selected>USD</option>
                                <option value="IDR">IDR</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-12" >
                            <label for="exampleInputEmail1" class="form-label">Card Number</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-wallet"></i>
                                </div>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Card Number" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6" >
                            <label for="exampleInputEmail1" class="form-label">Expiration Date</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="MM/YY" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputPassword1" class="form-label">CV Code</label>
                            <input type="number" class="form-control" placeholder="CVC" id="exampleInputPassword1">
                        </div>
                    </div>

                    <div class="form-group text-center" style="font-size: 40px">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa-brands fa-cc-visa"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa-brands fa-cc-mastercard"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa-brands fa-cc-amex"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa-brands fa-cc-discover"></i>
                            </li>
                        </ul>
                    </div>

                    <div class="alert alert-warning" role="alert">
                        NOTE: For currencies other than USD, a 2.5% fee will be added for exchange rate fees.
                    </div>
                </div>


                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputPassword1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputPassword1" class="form-label">Mobile</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="exampleInputPassword1" class="form-label">Country</label>
                            <select class="form-select" id="countrySelect">
                                <option selected readonly disabled>Choose...</option>
                                @foreach ($dataCountry as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Location</label>
                                <select class="form-select" id="locationSelect">
                                    <option selected readonly disabled>Choose...</option>
                                    @foreach ($dataLocation as $location)
                                        <option value="{{ $location->name }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Service</label>
                            <select class="form-select" id="data_service">
                                <option selected disabled readonly>Choose...</option>
                                @foreach ($dataService as $service)
                                    <option value="{{ $service->name }}">{{ $service->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="floatingTextarea2">Comments</label>
                            <textarea class="form-control mt-2" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>

                    <div class="form-check m-2">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label" for="autoSizingCheck">
                            I accept the Terms and conditions
                        </label>
                    </div>


                    <div class="row">
                            <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount" class="text-uppercase">Pay with Stripe</span>
                            </button>
                        </div>
                        </div>
                </div>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Get Data Price Using JQuery --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="{{ asset('admin_assets/assets/js/jquery3.5.1.min.js') }}"></script>

    <script type='text/javascript'>
        $(document).ready(function() {
            loadDataCurrency();

            function loadDataCurrency() {
                var currency_type = $("#currency_select").val();
                var services_name = $("#data_service").val();

                $.ajax({
                    url: '../getDataPrice/' + services_name,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {

                        if (currency_type == 'USD') {
                            $("#amount").val(response['data'][0].usd_price);
                        } else {
                            $("#amount").val(response['data'][0].idr_price);
                        }
                        if (response['data'][0].idr_price !== null) {
                            $("#amount").prop('readonly', true);
                        } else {
                            $("#amount").prop('readonly', false);
                        }
                    }
                });

                $('#data_service').change(function() {
                    services_name = $(this).val();
                    console.log(services_name);
                    $.ajax({
                        url: '../getDataPrice/' + services_name,
                        type: 'get',
                        dataType: 'json',
                        success: function(response) {
                            if (currency_type == 'USD') {
                                $("#amount").val(response['data'][0].usd_price);
                            } else {
                                $("#amount").val(response['data'][0].idr_price);
                            }
                            if (response['data'][0].idr_price !== null) {
                                $("#amount").prop('readonly', true);
                            } else {
                                $("#amount").prop('readonly', false);
                            }
                        }
                    });
                });
            };

            // Bind event change untuk #currency_select
            $('#currency_select').change(function(){
                loadDataCurrency();
            });
        });
    </script>
</body>
</html>
