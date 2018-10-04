<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>
        Material Dashboard by Creative Tim
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ adminAsset('css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet">

    @stack('style')

    @yield('heads')

</head>
<body>

    <div id="wrapper">
        <div class="wrapper ">

        <div class="sidebar" data-color="purple" data-background-color="azure">
          <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

            Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
            <a href="#" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>

        <div class="sidebar-wrapper">

            <ul class="nav">
                <li class="nav-item active  ">
                    <a class="nav-link" href="#0">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
              <!-- your sidebar here -->
            </ul>
        </div>

        </div>

        <div class="main-panel">


        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Dashboard</a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>

              <div class="collapse navbar-collapse justify-content-end">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link" href="#pablo">
                            <i class="material-icons">notifications</i> Notifications
                        </a>
                    </li>
                    <!-- your navbar here -->
                </ul>
              </div>
            </div>

        </nav>
        <!-- End Navbar -->



        <div class="content">

            <div class="container-fluid">
                @yield('content')
            </div>

            </div>

            <footer class="footer">

                <div class="container-fluid">
                
                    <!-- your footer here -->
                </div>

            </footer>
        </div>

    </div>

    <!--   Core JS Files   -->
    <script src="{{ adminAsset( 'js/core/jquery.min.js' )}}"></script>
    <script src="{{ adminAsset( 'js/core/popper.min.js' )}}"></script>
    <script src="{{ adminAsset( 'js/core/bootstrap-material-design.min.js' )}}"></script>
    <script src="{{ adminAsset( 'js/plugins/perfect-scrollbar.jquery.min.js' )}}"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ adminAsset( 'js/material-dashboard.min.js?v=2.1.0' )}}"></script>

    @stack('scripts')
</body>

</html>
