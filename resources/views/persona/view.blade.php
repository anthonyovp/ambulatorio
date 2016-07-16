<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/ by HTTrack Website Copier/3.x [XR&CO'2008], Tue, 17 Feb 2015 16:05:39 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ambulatorio Carri</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="{{ asset('css/plugins/css_pace/pace.css') }}" rel="stylesheet">
    <script src="{{ asset('js/plugins/css_pace/pace.js') }}"></script>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="{{ asset('css/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href='{{ asset('fonts.googleapis.com/css3ef8.css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic') }}' rel="stylesheet" type="text/css">
    <link href='{{ asset('fonts.googleapis.com/css5c84.css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}' rel="stylesheet" type="text/css">
    <link href="{{ asset('icons/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('css/plugins/messenger/messenger.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/messenger/messenger-theme-flat.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/morris/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datatables/datatables.css') }}" rel="stylesheet">
    <!-- THEME STYLES - Include these on every page. -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" role="navigation">

            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand">
                    <a href="index-2.html">                    </a>
                </div>
            </div>
            <!-- end BRAND HEADING -->

            <div class="nav-top">

                <!-- begin LEFT SIDE WIDGETS -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
 
                <ul class="nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="profile.html">
                                    <i class="fa fa-user"></i> Mi Perfil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-gear"></i> Configuraciones
                                </a>
                            </li>
                            <li>
                                <a class="logout_open" href="#logout">
                                    <i class="fa fa-sign-out"></i> Salir
                                    <strong>Richard Massri</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end USER ACTIONS DROPDOWN -->

                </ul>
                <!-- /.nav -->
                <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->

            </div>
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
        <nav class="navbar-side" role="navigation">
            <div class="navbar-collapse sidebar-collapse collapse">
                <ul id="side" class="nav navbar-nav side-nav">
                    <!-- begin SIDE NAV USER PANEL -->
                    <li class="side-user hidden-xs">
                        <img class="img-circle" src="{{ asset('img/1.jpg') }}" alt="" style="width:120px;">
                        <p class="welcome">
                            <i class="fa fa-key"></i> Conectado como
                        </p>
                        <p class="name tooltip-sidebar-logout">
                            Richard
                            <span class="last-name">Massri</span> <a style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
                        </p>
                        <div class="clearfix"></div>
                    </li>
                    <!-- end SIDE NAV USER PANEL -->
                    <!-- begin SIDE NAV SEARCH -->
                    <li class="nav-search">
                        <form role="form">
                            <input type="search" class="form-control" placeholder="Buscar...">
                            <button class="btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </li>
                    <!-- end SIDE NAV SEARCH -->
                    <!-- begin DASHBOARD LINK -->
                    <li>
                        <a class="active" href="index-2.html">
                            <i class="fa fa-dashboard"></i> Inicio
                        </a>
                    </li>

                       <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i> Mi Perfil
                        </a>
                    </li>

              

                           <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i> Catalogo
                        </a>
                    </li>
                    <!-- end DASHBOARD LINK -->
                    <!-- begin CHARTS DROPDOWN -->
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
                            <i class="fa fa-bar-chart-o"></i> Seguridad <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="charts">
                            <li>
                                <a href="/userGroups/usuario/">
                                    <i class="fa fa-angle-double-right"></i> Usuario
                                </a>
                            </li>
                            <li>
                                <a href="/userGroups/grupo">
                                    <i class="fa fa-angle-double-right"></i> Grupos
                                </a>
                            </li>
                            
                             <li>
                                <a href="/traza/admin">
                                    <i class="fa fa-angle-double-right"></i> Buscar Traza
                                </a>
                            </li>    
                        </ul>
                    </li>

                        <li>
                        <a href="calendar.html">
                            <i class="fa fa-edit">
                                
                            </i> Pacientes
                        </a>
                    </li>
                    <!-- end CHARTS DROPDOWN -->
                    <!-- begin FORMS DROPDOWN -->
                    <!-- end FORMS DROPDOWN -->
                    <!-- begin CALENDAR LINK -->
             
                    <!-- end CALENDAR LINK -->
                    <!-- begin TABLES DROPDOWN -->
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#tables">
                            <i class="fa fa-table"></i> Reportes <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="tables">
                            <li>
                                <a href="basic-tables.html">
                                    <i class="fa fa-angle-double-right"></i> Numericos
                                </a>
                            </li>
                            <li>
                                <a href="advanced-tables.html">
                                    <i class="fa fa-angle-double-right"></i>  Graficos
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- /.side-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </nav>

          @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container" style="margin-left: 250px; margin-top: 30px;">
            @yield('content')
        </div>
        <!-- /.navbar-side -->
        <!-- end SIDE NAVIGATION -->

        <!-- begin MAIN PAGE CONTENT -->
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
    <script src="{{ asset('ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/plugins/popupoverlay/jquery.popupoverlay.js') }}"></script>
    <script src="{{  asset('js/plugins/popupoverlay/defaults.js') }}"></script>
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="{{ asset('img/profile-pic.jpg') }}" alt="">
            <h3>
                <i class="fa fa-sign-out text-green"></i> Ready to go?
            </h3>
            <p>Select "Logout" below if you are ready<br> to end your current session.</p>
            <ul class="list-inline">
                <li>
                    <a href="login.html" class="btn btn-green">
                        <strong>Logout</strong>
                    </a>
                </li>
                <li>
                    <button class="logout_close btn btn-green">Cancel</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="{{  asset('js/plugins/popupoverlay/logout.js') }}" type="text/javascript"></script>
    <!-- HISRC Retina Images -->
    <script src="{{  asset('js/plugins/hisrc/hisrc.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    <script src="{{  asset('js/plugins/messenger/messenger.min.js') }}" type="text/javascript"></script>
    <script src="{{  asset('js/plugins/messenger/messenger-theme-flat.js') }}" type="text/javascript"></script>
    <!-- Date Range Picker -->
    <script src="{{  asset('js/plugins/daterangepicker/moment.js') }}" type="text/javascript"></script>
    <script src="{{  asset('js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <!-- Morris Charts -->
    <script src="{{  asset('js/plugins/morris/raphael-2.1.0.min.js') }}" type="text/javascript"></script>
    <!-- Flot Charts -->
    <script src="{{  asset('js/plugins/flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{  asset('js/plugins/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <!-- Sparkline Charts -->
    <script src="{{  asset('js/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <!-- Moment.js -->
    <script src="{{  asset('js/plugins/moment/moment.min.js') }}" type="text/javascript"></script>
    <!-- jQuery Vector Map -->
    <script src="{{  asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
    <script src="{{  asset('js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/demo/map-demo-data.js') }}"></script>
    <!-- Easy Pie Chart -->
    <script src="{{ asset('js/plugins/easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
    <!-- DataTables -->    <!-- THEME SCRIPTS -->
    <script src="{{ asset('js/flex.js') }}" type="text/javascript"></script>

</body>


<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/ by HTTrack Website Copier/3.x [XR&CO'2008], Tue, 17 Feb 2015 16:06:26 GMT -->
</html>




















