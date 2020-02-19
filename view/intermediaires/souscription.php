<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ForInt</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="./assets/skin/default_skin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="./assets/skin/default_skin/css/navbar.css">
  <link rel="stylesheet" type="text/css" href="./assets/skin/default_skin/css/validate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-light.min.css">  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
 <!--form tray center background-->
<style>
  .tray-center{
    background-image:url('./assets/img/patterns/backgrounds/bg_home.png')
  }
  .owl-dots{
    position: relative !important;
    top: -355px !important;
  }
  .owl-dots:first-child{
    padding-right: 56px !important;
  }
  .owl-dots:last-child{
    padding-left: 56px !important;
  }

</style>
<!--Form tray center background-->

</head>

<body class="sb-l-o admin-validation-page">
  <div class="main"><!-- Start: Main -->

  <?php include('menu_intermediaire.php');?><!-- Header include-->

  <section id='content' class='table-layout'><!-- Begin: Content -->
    <div class="tray tray-center">
      <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">
      <div class="panel heading-border" id="form-content"><!-- First row -->
          <?php include('form_souscript.php');?>
      </div><!-- Second row -->
      </div>
    </div>
  </section><!-- End: Content -->
  <!--h1>'.$message.'</h1-->

<section class='modal' id='avenant-modal'>
  <span class="close">&times;</span>
    <section class='modal-content animated zoomIn animation-delay-100 alert-msg'>
      <?php 
        if($message!=''){
          echo('<p>'.$message.'</p>');
        }
      ?>
    </section>
  </section>

  <section class='modal' id='cat4-modal' style='font-size: 10px !important'>
    <span class="close">&times;</span>
    <section class='modal-content animated zoomIn animation-delay-100 modal-content'>
      <p>NB : Pour les véhicules de catégorie4, les tarifications se font comme suit:</p>
      <table class="table table-bordered table-stripted">
        <thead>
          <tr>
            <th>Energie</th>
            <th>Nombre de places</th>
            <th>Puissance fiscale</th>
          </tr>
        </thead>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
         <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
         <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
         <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
         <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
         <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
        <tr>
            <td>Essence</td>
            <td>15 places</td>
            <td>2ch</td>
        </tr>
      </table>
    </section>
  </section>

  <section class='modal' id='tierce-modal'>
  <span class="close">&times;</span>
    <section class='modal-content animated zoomIn animation-delay-100 alert-msg'>
    <p>NB : Les tiérces complétes et tierces collusion sont résérvées aux voitures de moins de 5ans et avec une période de couverture d'au moins 6mois </p>
    </section>
  </section>

  <section class='modal' id='collision'>
    <span class="close">&times;</span>
    <section class='modal-content animated zoomIn animation-delay-100 alert-msg'>
    <p>Les tiérces complétes sont pour les catégories 1,2 et 6</p>
    </section>
  </section>

  <section class='modal' id='avenant'>
    <span class="close">&times;</span>
    <section class='modal-content animated zoomIn animation-delay-100' style='height: 45% !important;margin-left: 27%;'>
    <form method='POST' action='../../forInt_v2/controllers/PoliceController.php?action=avenant'  id="avenant-form">
      <div class="row">
      <label for="prenom">Intérmédiaire<span class="require-caracter">*</span></label>
        <input type="text" id="inputStandard" class="form-control" name='matricule_intermediaire'>
      </div>
      <div class="row" style='padding-bottom: 11px !important;'>
      <label for="prenom">Immatriculation<span class="require-caracter">*</span></label>
        <input type="text" id="inputStandard" class="form-control" name='immatriculation_vehicule'>
        <input type="hidden" name='avenant'>
      </div>
      <div class="row">
          <label for="Type d'avenant">Type d'avenant<span class="require-caracter">*</span></label>
          <select class="form-control" name="type_avenant" id="type_av">
            <option value="1">Avenant de renouvellement</option>
            <option value="2">Avenant de changement d'immatriculation</option>
          </select>
      </div>
      <div class="row">
        <button type="submit" class="btn btn-success btn-gradient dark btn-block" style='margin-top: 12px !important;width: 20%!important;margin:auto!important'>Success</button>
      </div>
    </form>
    </section>
  </section>

 



</div><!-- End: Main -->

  

  <!-- BEGIN: PAGE SCRIPTS -->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="./vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="./vendor/plugins/validate/validate.js"></script>
  <script src="./vendor/plugins/validate/steps.js"></script>
  <script src="./assets/js/utility/utility.js"></script>
  <script src="./assets/js/demo/demo.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/scripts.js"></script>
  <script src="./vendor/plugins/magnific/jquery.magnific-popup.js"></script>
  <script src="./assets/js/number_divider.js"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.js"></script>
  <script src="./assets/js/validate_form.js"></script>
  <script src="./assets/js/prime.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
                                                                              
<script>
$(document).ready(function(){
  var marques_voitures = ['FIAT','BMW','ACURA','FORD','HOLDEN','HONDA','HYUNDAI','ISUZU','KIA','LEXUS','NISSAN','RENAULT','SEAT','CHEVROLET','CITROEN','DACIA','INFINITI','MAZDA','MITSUBISHI','PEUGEOT','SUBARU','TOYOTA','VOLSWAGEN']
  $('#ville').on('change', function() {
        $(this).autocomplete({
            source: marques_voitures
        })
    })
    function pushAttestations(selector,tab=[]){
        $(selector).each(function(){
            tab.push($(this).val())
        })
        return tab;
    }
    var attestationsJaunes = [];
    var jaunes = pushAttestations('#att_jaune option',attestationsJaunes);
    $('#jaunes').on('change',function(){
      $(this).autocomplete({
            source: jaunes
        })
    })
    <?php 
      if($message!=''){
        echo('
          $("#avenant-modal").fadeIn();
          $(".close").on("click", function() {
            $("#avenant-modal").fadeOut();
          })'
        );
      };
    ;?>
   
})
</script>
</html>
