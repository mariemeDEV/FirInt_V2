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
    <!-- Glyphicons Pro CSS(font) -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/glyphicons-pro/glyphicons-pro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-light.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- begin row setting -->
    <div id="main">
        <p class='text-welcome'>
            For-Int <span class='forInt_subtitle'>Saham Sénégal</span>
            <a href="connexion.php" class="glyphicons glyphicons-circle_arrow_right get-connexion-icon animated infinite bounceIn delay-1s tooltip" title='Connexion'></a>
            <hr>
        </p>
    </div>

    <!-- begin canvas animation bg -->
    <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
    </div>





    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>

    <!-- CanvasBG Plugin(creates mousehover effect) -->
    <script src="vendor/plugins/canvasbg/canvasbg.js"></script>

    <!-- Theme Javascript -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });

        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>