<html lang="en" data-theme="light" data-layout-mode="fluid" data-menu-color="dark" data-topbar-color="light"
    data-layout-position="fixed" data-sidenav-size="default" class="menuitem-active">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Theme Config Js -->
    {{-- <script src="{{ asset(js/hyper-config.js) }}"></script> --}}
    {{-- <script src="assets/js/hyper-config.js"></script> --}}


    <!-- App css -->
    {{-- <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style"> --}}
    <link rel="stylesheet" href="{{ asset('css/layout/app-saas.min.css') }}">

    <!-- Icons css -->
    {{-- <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('css/layout/icons.min.css') }}">

</head>

<body class="show" style="padding: 0 !important">
    <!-- Begin page -->
    <div class="wrapper">
        @include('layout.topbar')

        <!-- ========== Topbar Start ========== -->
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('layout.sidebar')
        <!-- ========== Left Sidebar End ========== -->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">

                                </h4>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
                <!-- container -->

            </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

    <!-- Vendor js -->
    {{-- <script src="assets/js/vendor.min.js"></script> --}}
    <script src="{{ asset('js/layout/vendor.min.js') }}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ asset('js/layout/moment.min.js') }}"></script>

    <script src="{{ asset('js/layout/daterangepicker.js') }}"></script>

    <!-- Apex Charts js -->
    <script src="{{ asset('js/layout/apexcharts.min.js') }}"></script>

    <!-- Vector Map js -->
    <script src="{{ asset('js/layout/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/layout/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- Dashboard App js -->
    <script src="{{ asset('js/layout/demo.dashboard.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/layout/app.min.js') }}"></script>


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>
