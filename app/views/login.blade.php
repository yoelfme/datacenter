<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Dashboard</title>

        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="assets/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="assets/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="assets/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Login Container -->
        <div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-cube"></i> <strong>Bienvenidos</strong>
            </h1>
            <!-- END Login Header -->

            <!-- Login Block -->
            <div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                    <h2>Iniciar Sesion</h2>
                </div>
                <!-- END Login Title -->

                <!-- Login Form -->
                {{ Form::open(['url'=>'login','id'=>'form-login','class'=>'form-horizontal']) }}
                    @if(Session::has('error_message'))
                        <div class="alert alert-danger">
                            {{ Session::get('error_message') }}
                        </div>
                    @endif

                    @if(Session::has('logout_message'))
                        <div class="alert alert-info">
                            {{ Session::get('logout_message') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text"  name="username" class="form-control" placeholder="Tu usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" name="password" class="form-control" placeholder="Tu clave">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-8">
                            <label class="csscheckbox csscheckbox-primary">
                                {{ Form::checkbox('remember', true) }}
                                <span></span>
                            </label>
                            Recuerdame?
                        </div>
                        <div class="col-xs-4 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Ingresar</button>
                        </div>
                    </div>
                {{ Form::close() }}
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-2.1.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="assets/js/pages/readyLogin.js"></script>
        <script>$(function(){ ReadyLogin.init(); });</script>
    </body>
</html>