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
<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/navbar.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/glyphicons-pro/glyphicons-pro.css">
<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/connexion.css">
<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/accueil.css">
<!-- Favicon -->
<link rel="shortcut icon" href="assets/img/favicon.ico">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body class="blank-page">

    <!-- Start: Main -->
    <div id="main" class="container-fluid accueil-content">
        <?php include('blank1.php')?><!--Header include-->

        <!--div data-include="./blank1.html"></div><Header include-->

        <div class="container-fluid accueil-content"><!--Page content-->
        <div class="row fonctionalites-row"><!--row-->
            <div class="col-md-4 col-lg-7 fonctionalities-side"><!--Begin left side-->
                <div class="row f-row">
                    <a href="admin_index.php"><div class="col-md-4 col-lg-6 fonctionnality f1"><i class="glyphicons glyphicons-cars"><p>Utilisateurs</p></i></div></a>
                    <a href="admin_index.php"><div class="col-md-4 col-lg-6 fonctionnality f2"><i class="glyphicons glyphicons-restart"><p>Production</p></i></div></a>
                </div>
                <div class="row f-row">
                    <a href="admin_index.php"><div class="col-md-4 col-lg-6 fonctionnality f5"><i class="glyphicons glyphicons-folder_open"><p>Commandes</p></i></div></a>
                    <a href="admin_index.php"><div class="col-md-4 col-lg-6 fonctionnality f6"><i class="glyphicons glyphicons-notes"><p>Bureaux</p></i></div></a>
                </div>
                <div class="row f-row">
                    <a href="admin_index.php"><div class="col-md-4 col-lg-6 fonctionnality f3"><i class="glyphicons glyphicons-suitcase"><p>Dotation</p></i></div></a>
                    <a href="admin_index.php"><div class="col-md-4 col-lg-6 fonctionnality f4"><i class="glyphicons glyphicons-blog"><p>Annulations</p></i></div></a>
                </div>
            </div><!--End left side-->

            <div class="col-md-4 col-lg-5 admin-right"><!--Begin right side-->
            <span class="fa fa-user profil-avatar"></span>
            <p class='profil-title '>Administrateur</p>
            </div><!--End right side-->

        </div>
    </div>
    </div>

<!-- BEGIN: PAGE SCRIPTS -->
<!-- jQuery -->
<script src="vendor/jquery/jquery-1.11.1.min.js"></script>
<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>


<!-- Theme Javascript -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/scripts.js">
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