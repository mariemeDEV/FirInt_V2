<!DOCTYPE html>
<html>
<?php
    include('includes_css.php');
    $assets = 'http://192.168.72.249:2702/forint_v2/assets/';
    $vendor = 'http://192.168.72.249:2702/forint_v2/vendor/';
    $routes = 'http://192.168.72.249:2702/forint_v2/controllers/users_routes.php';
?><!--Header include-->
<body class="blank-page">
    <!-- Start: Main -->
    <div id="main" class="container-fluid accueil-content">
    <header class="navbar navbar-static-top">
      <div class="navbar-branding">
        <a class="navbar-brand" href="../../index.php"></a>
      </div>
      <ul class="nav navbar-nav navbar-left">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="label label-warning" style="color: #d19e4f !important;background-color: #64707e !important;position: relative;top: -13px;left: 32px;font-weight: bold !important">2</span>
            <span class="fa fa-envelope"></span>
          </a>
          <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">
            <li class="dropdown-header">
              <span class="dropdown-title">TARIFICATIONS CATEGORIE4</span>
            </li>
            <li class="media">
              <div class="media-body">
                <h5 class="media-heading">Article
                  <small class="text-muted">7 à 10 cheveaux</small>
                </h5> Prime
                <a class="text-system" href="#"> 17701 </a>
              </div>
            </li>
            <li class="media">
              <a class="media-left" href="#"> <img src=<?php echo $assets.'img/avatars/2.jpg';?> class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5">Article
                  <small> - 08/16/22</small>
                </h5>
                Last Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </li>
            <li class="media">
              <a class="media-left" href="#"> <img src=<?php echo $assets.'img/avatars/3.jpg';?> class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading">Article
                  <small class="text-muted">- 08/16/22</small>
                </h5> Last Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </li>
            <li class="media">
              <a class="media-left" href="#"> <img src=<?php echo $assets.'img/avatars/4.jpg';?> class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5">Article
                  <small class="text-muted">- 08/16/22</small>
                </h5> Last Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="fa fa-user"></span>
          </a>
        </li>
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle" style='color:#00800099 !important'></i>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"><?php //echo($matricule)?>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Notifications
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href=<?php echo $routes.'?action=deconnect'?> class="animated animated-short fadeInUp">
                <span class="fa fa-power-off"></span> Deconnexion </a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- End: Header -->
        <div class="container-fluid accueil-content"><!--Page content-->
        <div class="row fonctionalites-row"><!--row-->
            <div class="col-md-4 col-lg-7 fonctionalities-side"><!--Begin left side-->
                <div class="row f-row">
                    <a href=<?php echo $routes.'?action=souscript'?>><div class="col-md-4 col-lg-6 fonctionnality f1"><i class="glyphicons glyphicons-cars"><p>Souscription</p></i></div></a>
                    <a href=<?php echo $routes.'?action=simul'?>><div class="col-md-4 col-lg-6 fonctionnality f2"><i class="glyphicons glyphicons-restart"><p>Simulation</p></i></div></a>
                </div>
                <div class="row f-row">
                    <a href=<?php echo $routes.'?action=contrats'?>><div class="col-md-4 col-lg-6 fonctionnality f3"><i class="glyphicons glyphicons-suitcase"><p>Contrats</p></i></div></a>
                    <a href=<?php echo $routes.'?action=devis'?>><div class="col-md-4 col-lg-6 fonctionnality f4"><i class="glyphicons glyphicons-blog"><p>Dévis</p></i></div></a>
                </div>
                <div class="row f-row">
                    <a href=<?php echo $routes.'?action=attestations'?>><div class="col-md-4 col-lg-6 fonctionnality f5"><i class="glyphicons glyphicons-folder_open"><p>Attestations</p></i></div></a>
                    <a href=<?php echo $routes.'?action=garanties'?>><div class="col-md-4 col-lg-6 fonctionnality f6"><i class="glyphicons glyphicons-notes"><p>Garanties</p></i></div></a>
                </div>
            </div><!--End left side-->

            <div class="col-md-4 col-lg-5 dynamic-side"><!--Begin right side-->
                <div class="owl-carousel owl-theme owl-visuels accueil-carousel">
                    <div class="item owl-carousel-item">
                        <img src=<?php echo $assets."img/patterns/slide1.png";?> alt="" style='width:100% !important'>
                    </div>
                    <div class="item owl-carousel-item">
                        <img src=<?php echo $assets."img/patterns/slide2.jpg";?> alt="" style='width:100% !important'>
                    </div>
                </div>
            </div><!--End right side-->
        </div>
    </div>
    </div>
<!-- BEGIN: PAGE SCRIPTS -->
<!-- jQuery -->
<?php
echo'
      <script src=';echo $vendor.'jquery/jquery-1.11.1.min.js></script>
      <script src=';echo $vendor.'jquery/jquery_ui/jquery-ui.min.js></script>
      <script src=';echo 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js></script>
      <script src=';echo $assets.'js/utility/utility.js></script>
      <script src=';echo $assets.'js/demo/demo.js></script>
      <script src=';echo $assets.'js/main.js></script>
      <script src=';echo $assets.'js/scripts.js>';
?>
    <script>
        jQuery(document).ready(function() {
            "use strict";
            Core.init();
            Demo.init();
        });
    </script>
</body>
</html>