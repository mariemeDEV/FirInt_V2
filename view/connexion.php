<!DOCTYPE html>
<html>
<?php
    $assets = 'http://192.168.72.249:2702/forint_v2/assets/';
    $vendor = 'http://192.168.72.249:2702/forint_v2/vendor/';
?><!--Header include-->

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href=<?php echo $assets.'skin/default_skin/css/theme.css'?>>
  <link rel="stylesheet" type="text/css" href=<?php echo $assets.'skin/default_skin/css/connexion.css'?>>
  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href=<?php echo $assets.'admin-tools/admin-forms/css/admin-forms.css'?>>
  <!-- Favicon -->
  <link rel="shortcut icon" href=<?php echo $assets.'img/favicon.ico'?>>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page external-alt sb-l-c sb-r-c">

  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Begin: Content -->
      <section id="content">

        <div class="admin-form theme-info mw500" id="login">
          <!-- Login Logo -->
          <div class="row table-layout">
            <a href="index.php" title="Return to Dashboard">
              <img src="assets/img/logos/logo-footer.png" title="For-Int" class="center-block img-responsive" style="max-width: 275px;">
            </a>
          </div>
          <!-- Login Panel/Form -->
          <div class="panel mt30 mb25">
            <form id="connexion">
              <div class="panel-body bg-light p25 pb15">
                <!-- Divider -->
                <div class="section-divider mv30">
                  <span>For-Int</span>
                </div>
                <!-- Username Input -->
                <div class="section">
                  <label for="username" class="field-label text-muted fs18 mb10">Login</label>
                  <label for="username" class="field prepend-icon">
                  <input type="hidden" name='hiddenUser'>
                  <input type='hidden' name='userAttestations'>
                    <input type="text" name="username" id="uname" class="gui-input" placeholder="Enter username">
                    <label for="username" class="field-icon">
                      <i class="fa fa-user"></i>
                    </label>
                  </label>
                </div>
                <!-- Password Input -->
                <div class="section">
                  <label for="username" class="field-label text-muted fs18 mb10">Mot de passe</label>
                  <label for="password" class="field prepend-icon">
                    <input type="password" name="password" id="pw" class="gui-input" placeholder="Enter password">
                    <label for="password" class="field-icon">
                      <i class="fa fa-lock"></i>
                    </label>
                  </label>
                </div>
              </div>
              <div class="panel-footer clearfix">
                <button type="submit" class="button btn-primary mr10 pull-right" name='submitConnexion' id='conexion'>Connexion</button>
                <label class="switch ib switch-primary mt10">
                  <input type="checkbox" name="remember" id="remember" checked>
                  <label for="remember" data-on="OUI" data-off="NON"></label>
                  <span>Se rappeler de moi</span>
                </label>
              </div>
            </form>
          </div>

          <!-- Registration Links -->
          <div class="login-links">
            <p>
              <a href="reset_pw.php" class="active">Mot de passe oublié</a>
            </p>
            <p>For-Int
              <a href="connexion.php"> | Saham Sénégal</a>
            </p>
          </div>
          <!-- Registration Links(alt) -->
          <!--div class="login-links hidden">
            <a href="pages_forgotpw(alt).html" class="active" title="Sign In">Sign In</a> |
            <a href="pages_register(alt).html" class="" title="Register">Register</a>
          </div-->
        </div>
      </section>
      <!-- End: Content -->
    </section>
    <!-- End: Content-Wrapper -->
    <div class="modal connection-modal">
      <img src="assets/img/patterns/ajax-loader.gif" class ='loader' alt="Chargement...">
    </div>

    <div class="modal error-modal">
      <p>Vous n'etes pas reconnu</p>
    </div>

  </div>
  <!-- End: Main -->


  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src=<?php echo $vendor.'jquery/jquery-1.11.1.min.js'?>></script>
  <script src=<?php echo $vendor.'jquery/jquery_ui/jquery-ui.min.js'?>></script>

  <!-- Theme Javascript -->
  <script src=<?php echo $assets.'js/utility/utility.js'?>></script>
  <script src=<?php echo $assets.'js/demo/demo.js'?>></script>
  <script src=<?php echo $assets.'js/main.js'?>></script>
  <script src=<?php echo $assets.'js/connexion.js'?>></script>

  <!-- Page Javascript -->
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    // Init Theme Core      
    Core.init();
    // Init Demo JS
    Demo.init();
  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>
</html>
