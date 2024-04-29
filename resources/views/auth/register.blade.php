<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register | Outpost App</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin_assets') }}/assets/images/logo/favicon.ico">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('admin_assets') }}/assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="auth-full-height d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-2">
                                <div class="d-flex justify-content-center mt-3">
                                    <div class="text-center logo">
                                        <img alt="logo" class="img-fluid" src="{{ asset('admin_assets') }}/assets/images/logo/logo-fold.png"
                                            style="height: 70px;">
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <h3 class="fw-bolder">Sign Up</h3>
                                    <p class="text-muted">Sign up account to get free reward!</p>
                                </div>


                                <form method="POST" action="{{ route('register') }}">
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
                                <div class="text-center mt-4">
                                    <p class="text-muted">Have an account? <a href="{{ route('login') }}">Login Here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="{{ asset('admin_assets') }}/assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{ asset('admin_assets') }}/assets/js/app.min.js"></script>

</body>

</html>
