<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico">

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
                                        <img alt="logo" class="img-fluid" src="{{ asset('admin_assets') }}/assets/images/logo/logo-fold.png" style="height: 70px;">
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <h3 class="fw-bolder">Sign In</h3>
                                    <p class="text-muted">Sign in your account to continue</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" name="email" value="{{ old('email') }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label d-flex justify-content-between">
                                            <span>Password</span>
                                            <a href="" class="text-primary font">Forget Password?</a>
                                        </label>
                                        <div class="form-group input-affix flex-column">
                                            <label class="d-none">Password</label>
                                            <input formcontrolname="password" class="form-control" type="password" name="password">
                                            <i class="suffix-icon feather cursor-pointer text-dark icon-eye" ng-reflect-ng-class="icon-eye"></i>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Log In</button>
                                </form>


                                <div class="text-center mt-4">
                                    <p class="text-muted">Don't have an account yet? <a href="/auth/register-1">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
