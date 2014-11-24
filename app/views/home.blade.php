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
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon" href="assets/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="assets/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="assets/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="assets/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="assets/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="assets/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="assets/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="assets/img/icon180.png" sizes="180x180">
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

        {{ HTML::style('app/css/estilos.css') }}
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader">
                <div class="inner">
                    <!-- Animation spinner for all modern browsers -->
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                    <!-- Text for IE9 -->
                    <h3 class="text-primary visible-lt-ie10"><strong>Cargando...</strong></h3>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                'sidebar-light'                                 for a light main sidebar (You can add it along with any other class)

                'sidebar-visible-lg-mini'                       main sidebar condensed - Mini Navigation (> 991px)
                'sidebar-visible-lg-full'                       main sidebar full - Full Navigation (> 991px)

                'sidebar-alt-visible-lg'                        alternative sidebar visible by default (> 991px) (You can add it along with any other class)

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'fixed-width'                                   for a fixed width layout (can only be used with a static header/main sidebar layout)

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links (You can add it along with any other class)
            -->
            <div id="page-container" class="header-fixed-top">
                <!-- Alternative Sidebar -->
                <div id="sidebar-alt" tabindex="-1" aria-hidden="true">
                    <!-- Toggle Alternative Sidebar Button (visible only in static layout) -->
                    <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>

                </div>
                <!-- END Alternative Sidebar -->
                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Header Link -->
                            <li class="hidden-xs animation-fadeInQuick">
                                <a href=""><strong>BIENVENIDO</strong></a>
                            </li>
                            <!-- END Header Link -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="assets/img/avatar.png" alt="avatar">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">
                                        <strong>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</strong>
                                    </li>
                                    <li>
                                        <a href="logout">
                                            <i class="fa fa-power-off fa-fw pull-right"></i>
                                            Cerrar Sesion
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <div class="row">
                            <div class="col-sm-6">
                             <!-- Pie Chart Block -->
                                 <div class="block full">
                                      <!-- Pie Chart Title -->
                                      <div class="block-title">
                                          <h2>Proyectos y Empleados</h2>
                                      </div>
                                      <!-- END Pie Title -->

                                      <!-- Pie Chart Content -->
                                      <div id="projects" style="height: 380px;"></div>
                                      <!-- END Pie Chart Content -->
                                 </div>
                             <!-- END Pie Chart Block -->
                            </div>
                            <div class="col-sm-6">
                                 <!-- Pie Chart Block -->
                                 <div class="block full">
                                      <!-- Pie Chart Title -->
                                      <div class="block-title">
                                          <h2>Tipos de Empleados y Empleados</h2>
                                      </div>
                                      <!-- END Pie Title -->

                                      <!-- Pie Chart Content -->
                                      <div id="projects2" style="height: 380px;"></div>
                                      <!-- END Pie Chart Content -->
                                 </div>
                             <!-- END Pie Chart Block -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                 <!-- Pie Chart Block -->
                                 <div class="block full">
                                      <!-- Pie Chart Title -->
                                      <div class="block-title">
                                          <h2>Ingresos Totales</h2>
                                      </div>
                                      <!-- END Pie Title -->

                                      <!-- Pie Chart Content -->
                                      <div id="incomes" style="height: 380px;"></div>
                                      <!-- END Pie Chart Content -->
                                 </div>
                             <!-- END Pie Chart Block -->
                            </div>
                            <div class="col-sm-6">
                                 <!-- Pie Chart Block -->
                                 <div class="block full">
                                      <!-- Pie Chart Title -->
                                      <div class="block-title">
                                          <h2>Egresos Totales</h2>
                                      </div>
                                      <!-- END Pie Title -->

                                      <!-- Pie Chart Content -->
                                      <div id="noincomes" style="height: 380px;"></div>
                                      <!-- END Pie Chart Content -->
                                 </div>
                             <!-- END Pie Chart Block -->
                            </div>
                        </div>
                        <hr/>
                    </div>

                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
                <footer class="my-footer">
                    <div class="text-center">
                        <small>Creado con <i class="fa fa-heart text-danger"></i> por <a href="http://www.twitter.com/yoelfme" target="_blank">Yoel</a> y <a href="http://www.twitter.com/ballardo_monroy" target="_blank">Ballardo</a>  </small><br>
                        <small><span id="year-copy">2014</span> ©</small>
                    </div>
                </footer>
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="app/js/jquery.min.js"></script>


        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        {{--<script src="assets/js/pages/readyDashboard.js"></script>--}}
        <script src="app/js/home.js"></script>
        <script>$(function(){ home.init(); });</script>
    </body>
</html>