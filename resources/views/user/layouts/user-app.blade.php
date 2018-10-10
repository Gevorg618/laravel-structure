<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Oct 2018 13:41:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @if(View::hasSection('title'))
        <title> Company Name  - @yield('title')</title>
    @else
        <title> Company Name </title>
    @endif

    <!-- Bootstrap Core CSS -->
    <link href="{{ userAsset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ userAsset('plugins/mdb/css/mdb.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ userAsset('css/style.css') }}" rel="stylesheet">

    <!-- You can change the theme colors from here -->
    <link href="{{ userAsset('css/colors/default-dark.css') }}" rel="stylesheet">

    @stack('style')
</head>

<body class="fix-header fix-sidebar card-no-border">

    <!-- Preloader - style you can find in spinners.css -->

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">

        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar">
           @include('user.layouts.partials._navbar')
        </header>
        <!-- End Topbar header -->

        @include('user.layouts.partials._sidebar')

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <div class="container-fluid">

                <!-- Bread crumb and right sidebar toggle -->
                @yield('breadcrumbs')
                <!-- End Bread crumb and right sidebar toggle -->

                <!-- Start Page Content -->
                @yield('content')
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

            <!-- footer -->
            <footer class="footer"> © 2018</footer>
            <!-- End footer -->

        </div>

        <!-- End Page wrapper  -->

    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <script src="{{ userAsset( 'plugins/jquery/jquery.min.js' )}}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ userAsset( 'plugins/popper/popper.min.js' )}}"></script>
    <script src="{{ userAsset( 'plugins/bootstrap/js/bootstrap.min.js' )}}"></script>
    <script src="{{ userAsset( 'plugins/mdb/js/mdb.min.js' )}}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ userAsset( 'js/jquery.slimscroll.js' )}}"></script>
    
    <!--Wave Effects -->
    <script src="{{ userAsset( 'js/waves.js' )}}"></script>

    <!--Menu sidebar -->

    <script src="{{ userAsset( 'js/sidebarmenu.js' )}}"></script>

    <!--stickey kit -->
    <script src="{{ userAsset( 'plugins/sticky-kit-master/dist/sticky-kit.min.js' )}}"></script>
    <script src="{{ userAsset( 'plugins/sparkline/jquery.sparkline.min.js' )}}"></script>
    <script src="{{ userAsset( 'plugins/sparkline/jquery.sparkline.min.js' )}}"></script>

    <!--Custom JavaScript -->
    <script src="{{ userAsset( 'js/custom.min.js' )}}"></script>
    <!-- This page plugins -->

    <!-- Style switcher -->
    <script src="{{ userAsset( 'plugins/styleswitcher/jQuery.style.switcher.js' )}}"></script>

    @stack('script')
</body>

</html>
