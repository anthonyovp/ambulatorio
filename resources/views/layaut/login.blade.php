<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/login-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Mar 2016 11:00:58 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flex Admin - Responsive Admin Theme</title>

    <!-- GLOBAL STYLES -->
    <link href="{{ asset('css/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('css/plugins/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet">

    <!-- THEME STYLES -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">

    <!-- THEME DEMO STYLES -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="login">

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="login-banner text-center">
            <h1><i class="fa fa-gears"></i> Pantalla de Administrador</h1>
          </div>
          <div class="portlet portlet-green">
            <div class="portlet-heading login-heading">
              <div class="portlet-title">
                <h4><strong>Iniciar session</strong></h4>
              </div>
              <div class="portlet-widgets">
                <button class="btn btn-white btn-xs">Registrate</button>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
              <form accept-charset="UTF-8" role="form">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="Usuario" name="email" type="text">
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Clave" name="password" type="password" value="">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="remember" type="checkbox" value="Remember Me"> Recuérdame
                    </label>
                  </div>
                  <br>
                </fieldset>
                <br>
                <p class="small">
                  <a href="#">Olvidaste tu Contraseña?</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- GLOBAL SCRIPTS -->
    <script src="{{ asset('ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- HISRC Retina Images -->
    <script src="{{ asset('js/plugins/hisrc/hisrc.js') }}"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="js/flex.js"></script>

  </body>


<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/login-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Mar 2016 11:00:58 GMT -->
</html>