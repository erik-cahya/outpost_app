<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Outpost - Admin Panel</title>

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin_assets') }}/assets/images/logo/favicon.ico">

    <!-- page css -->
    <link href="{{ asset('admin_assets') }}/assets/vendors/apexcharts/dist/apexcharts.css" rel="stylesheet">

    <!-- Core css -->
    <link href="{{ asset('admin_assets') }}/assets/css/app.min.css" rel="stylesheet">

    @yield('css_customize')

</head>

<body>
    <div class="layout">
        <div class="vertical-layout">

            <!-- Header START -->
            @include('admin.layouts.header')

            <!-- Side Nav START -->
            @include('admin.layouts.sidebar')

            <!-- Content START -->
            <div class="content">
                @yield('content')

                <!-- Footer START -->
                @include('admin.layouts.footer')
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{ asset('admin_assets') }}/assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="{{ asset('admin_assets') }}/assets/vendors/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('admin_assets') }}/assets/js/pages/dashboard.js"></script>

    <!-- Core JS -->
    <script src="{{ asset('admin_assets') }}/assets/js/app.min.js"></script>

    @yield('js_customize')

</body>

</html>
