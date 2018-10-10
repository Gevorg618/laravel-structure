<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


        <!-- Bootstrap Core CSS -->
        <link href="{{ userAsset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ userAsset('plugins/mdb/css/mdb.min.css') }}" rel="stylesheet">

        <!-- You can change the theme colors from here -->
        <link href="{{ userAsset('css/colors/default-dark.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ userAsset('css/login-signup.css') }}" rel="stylesheet">
    </head>
    <body>
    <section>
        <div class="container-fluid">
            <div class="row top-content">
                <div class="col-12 col-md-6 left-side">
                    <div>
                        <a class="navbar-brand" href="/">Samuel Gilbert</a>
                    </div>
                    <div class="carousel-content">
                        <div id="login-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#login-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#login-carousel" data-slide-to="1"></li>
                                <li data-target="#login-carousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="carousel-item text-center active">
                                    <img class="img-fluid" src="{{ userAsset('images/strategicbd.png') }}">
                                    <div class="carousel-caption position-static">
                                        <h5 class="carousel-header">Send Your Proposals</h5>
                                        <p class="carousel-description">
                                            Plese replace this text with something more relevant to your project,
                                            I”ve put something here so it could look nice & cool once you change it, that’s perfect
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <img class="img-fluid" src="{{ userAsset('images/strategicbd.png') }}">
                                    <div class="carousel-caption position-static">
                                        <h5 class="carousel-header">Send Your Proposals</h5>
                                        <p class="carousel-description">
                                            Plese replace this text with something more relevant to your project,
                                            I”ve put something here so it could look nice & cool once you change it, that’s perfect
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <img class="img-fluid" src="{{ userAsset('images/strategicbd.png') }}">
                                    <div class="carousel-caption position-static">
                                        <h5 class="carousel-header">Send Your Proposals</h5>
                                        <p class="carousel-description">
                                            Plese replace this text with something more relevant to your project,
                                            I”ve put something here so it could look nice & cool once you change it, that’s perfect
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 right-side">
                    <div class="btn-group-cont">
                        <div class="btn-group login-btn-group float-right" role="group">
                            <button type="button" class="btn btn-rounded">Sign up</button>
                            <button type="button" class="btn btn-rounded blue-btn">Log in</button>
                        </div>
                    </div>
                    <div class="alert alert-danger alert-error animated bounceInRight" role="alert">
                        This is a danger alert—check it out!
                    </div>
                    <div class="auth-form-cont h-100 d-flex align-items-center text-center text-md-left">
                        <form class="w-100 animated bounceInDown">

                            <h4 class="mb-5 text-white">Sign in Today And Be Our Favoret</h4>

                            <input type="email" id="email-login" class="form-control d-inline-block" placeholder="Your Email">

                            <input type="password" id="password-login" class="form-control d-inline-block" placeholder="Your Password">
                            <div>
                                <button class="btn btn-rounded blue-btn" type="submit">Log in</button>
                            </div>
                        </form>

                        <form class="w-100 animated hide-form bounceInDown">
                            <h4 class="mb-5 text-white">Sign up today</h4>
                            <input type="text" id="username" class="form-control d-inline-block" placeholder="Your Username">
                            <input type="password" id="password-signup" class="form-control d-inline-block" placeholder="Your Password">
                            <input type="password" id="repeat-password" class="form-control d-inline-block" placeholder="Repeat Your Password">
                            <input type="email" id="email-signup" class="form-control d-inline-block" placeholder="Your Email">
                            <div>
                                <button class="btn btn-rounded blue-btn" type="submit">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- All Jquery -->
    <script src="{{ userAsset( 'plugins/jquery/jquery.min.js' )}}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ userAsset( 'plugins/popper/popper.min.js' )}}"></script>
    <script src="{{ userAsset( 'plugins/bootstrap/js/bootstrap.min.js' )}}"></script>
    <script src="{{ userAsset( 'plugins/mdb/js/mdb.min.js' )}}"></script>

    <!-- Custom CSS -->
    <script src="{{ userAsset( 'js/login-signup/login-signup.js' )}}"></script>
    </body>
</html>
