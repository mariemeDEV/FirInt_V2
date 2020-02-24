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
        <?php include('../blank1.php')?><!--Header include-->
        <!--div data-include="./blank1.html"></div><Header include-->
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