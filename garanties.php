<!DOCTYPE html>
<html>

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
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="admin-dock-page">

  <!-- Start: Main -->
  <div id="main">
  <?php include('menu_intermediaire.php');?><!--Header include-->
    <!-- Start: Content-Wrapper -->
    <div id="content_wrapper" style="margin:20px">
      <!-- Begin: Content -->
      <div class="panel">
  <div class="panel-heading">
    <span class="panel-title">
    <span class="glyphicon glyphicon-hand-down"></span>Well Tabs</span>
  </div>
  <div class="panel-body">
    <ul class="nav nav-pills mb20 pull-right">
      <li class="active">
        <a href="#tab17_1" data-toggle="tab" aria-expanded="false">Résponsabilité civile</a>
      </li>
      <li class="">
        <a href="#tab17_2" data-toggle="tab" aria-expanded="false">Recours des tiers</a>
      </li>
      <li class="">
        <a href="#tab17_3" data-toggle="tab" aria-expanded="true">Défense et recours</a>
      </li>
      <li class="">
        <a href="#tab17_4" data-toggle="tab" aria-expanded="false">Incedie</a>
      </li>
      <li class="">
        <a href="#tab17_5" data-toggle="tab" aria-expanded="false">Vol</a>
      </li>
      <li class="">
        <a href="#tab17_6" data-toggle="tab" aria-expanded="false">Bris de glace</a>
      </li>
      <li class="">
        <a href="#tab17_7" data-toggle="tab" aria-expanded="false">Tiérce compléte</a>
      </li>
      <li class="">
        <a href="#tab17_8" data-toggle="tab" aria-expanded="false">Tiérce collision</a>
      </li>
      <li class="">
        <a href="#tab17_9" data-toggle="tab" aria-expanded="false">Avance sur recours</a>
      </li>
      <li class="">
        <a href="#tab17_10" data-toggle="tab" aria-expanded="false">Personnes transportées</a>
      </li>
      <li class="">
        <a href="#tab17_11" data-toggle="tab" aria-expanded="false">Assistance</a>
      </li>
      <li class="">
        <a href="#tab17_2" data-toggle="tab" aria-expanded="false">Packs</a>
      </li>
    </ul>
    <div class="clearfix"></div>
    <div class="tab-content br-n pn">
      <div id="tab17_1" class="tab-pane">
        <div class="row">
          <div class="col-md-4">
            <img src="assets/img/stock/3.jpg" class="img-responsive thumbnail mr25">
          </div>
          <div class="col-md-8">
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
          </div>
        </div>
      </div>
      <div id="tab17_2" class="tab-pane">
        <div class="row">
          <div class="col-md-4">
            <img src="assets/img/stock/4.jpg" class="img-responsive thumbnail mr25">
          </div>
          <div class="col-md-8">
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
          </div>
        </div>
      </div>
      <div id="tab17_3" class="tab-pane active">
        <div class="row">
          <div class="col-md-4">
            <img src="assets/img/stock/5.jpg" class="img-responsive thumbnail mr25">
          </div>
          <div class="col-md-8">
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      <!-- End: Content -->
        </div>

    

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Theme Javascript -->
  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS     
    Demo.init();

    // Demo only javascript. no real use
    var contentType = $('#content-type');
    var Content = $('#dock-content');

    contentType.on('click', '.holder-style', function(e) {
      e.preventDefault();

      var This = $(this);
      var activeContent = This.attr('href');

      // Content button active
      contentType.find('.holder-style').removeClass('holder-active');
      This.addClass('holder-active');

      Content.children('div').removeClass('active-content');
      $(activeContent).addClass('active-content');
    });

    $('#dock-push').on('click', function() {

      var findPush = Content.children('.active-content').find('.dock-item');

      // Admin Dock Plugin
      findPush.dockmodal({
        minimizedWidth: 220,
        height: 430,
        title: function() {
          // note this is a panel specific callback
          // will return undefined if nonexistant
          return this.data('title');
        },
        initialState: "minimized"
      });

    });

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>
