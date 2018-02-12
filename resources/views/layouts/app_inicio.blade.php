<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Delicious Gourmet</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/carrousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/plugins/fancybox/jquery.fancybox.css') }}" rel="stylesheet" />
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUMrJ3hOZnYREMFMpI90vN-_dpiBTER7c" async defer></script>

</head>
<body class="@yield('body-class')" onload="cargar_mapa()">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                <span class="sr-only">Toggle Navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                    </button>
                            </div> <!--./navbar-header-->
                            

                            <div class="navbar-collapse collapse">
                                    <ul class="nav nav-justified">    
                                        <li><a data-scroll='' href="#nosotros">Nosotros</a></li>
                                        <li><a data-scroll='' href="#carta">Carta</a></li>
                                        <!--<li><a data-scroll='' href="#pantallas">Promociones</a></li>-->
                                        <li><a data-scroll='' href="#app">Contacto</a></li>
                                        <li><a data-scroll='' href="#ubicacion">Ubicación</a></li>   <li><a href="{{ route('login') }}">Ingresar</a></li>                              
                                    </ul>
                            </div> 
<!--
        <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">Ingresar</a></li>
                    <li><a href="{{ route('register') }}">Registro</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Desconectarse
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                </ul>
            </div> 
-->
                    </div> <!--./container-->
        </div> <!--./navbar navbar-->


<!-- Fin Navbar -->

    <div class="wrapper">
        @yield('content');
    </div>


</body>
    <!--   Core JS Files   -->
    <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/material.min.js') }}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('/js/nouislider.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset('/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset('/js/material-kit.js') }}" type="text/javascript"></script>



<!----landing page------>

        <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery.js"><\/script>')</script>-->

                
        <script src="{{ asset('css/plugins/fancybox/jquery.fancybox.js') }}" type="text/javascript"></script>
        

        <script src="{{ asset('/js/bootstrapValidator.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/smooth-scroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/main.js') }}" type="text/javascript"></script>

        <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
        <!--<script src="{{ asset('/js/app2.js') }}" type="text/javascript"></script>-->
        

</html>



                    