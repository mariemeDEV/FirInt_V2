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

  
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="./vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

    <!-- Datatables Addons CSS -->
    <link rel="stylesheet" type="text/css" href="./vendor/plugins/datatables/media/css/dataTables.plugins.css">



  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/img/favicon.ico">
  <style>
      .data_tab{
          font-size:13px !important
      }

      #production-tab_info{
          display:none !important;
      }
      
      .dataTables_filter .input-sm{
        width: 65% !important;
        height: 15px !important;
        margin-right: 110px !important;
      }
      .data{
        font-size:14px !important
      }
  </style>

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
          <?php include('contrats_tab.php');?>
      </div><!-- Second row -->
      </div>
    </div>
  </section><!-- End: Content -->

  <section class='modal confirm-modal'>
    <span class="close">&times;</span>
    <section class='modal-content animated zoomIn animation-delay-100 alert-msg'>
      <p class='conf-msg'></p>
        <a id='idPol' href='#' class="btn btn-gradient dark btn-block" style='width: 34%!important;height: 35px;margin: auto!important;position: relative;top: 25px;background:#11243a;color: #d19e4f'>Oui</a>
    </section>
  </section>
  
  <!-- Modal avenant--><?php include('avenant_modal.php') ?><!--Modal avenant -->

</div><!-- End: Main -->

  

  <!-- BEGIN: PAGE SCRIPTS -->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="./vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Datatables -->
    <script src="./vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

    <!-- Datatables Tabletools addon -->
    <script src="./vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

    <!-- Datatables ColReorder addon -->
    <script src="./vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>

    <!-- Datatables Bootstrap Modifications  -->
    <script src="./vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="./assets/js/utility/utility.js"></script>
    <script src="./assets/js/demo/demo.js"></script>
    <script src="./assets/js/main.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
      "use strict";
      // Init Theme Core    
      Core.init();
      // Init Demo JS  
      Demo.init();
      $('#production-tab').dataTable({
          "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
          }],
          "oLanguage": {
              "oPaginate": {
                  "sPrevious": "",
                  "sNext": ""
              }
          },
          "iDisplayLength": 6,
          "aLengthMenu": [
              [5, 10, 25, 50, -1],
              [5, 10, 25, 50, "All"]
          ],
          "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
          "oTableTools": {
              "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
          }
      });
      $('.dataTables_filter input').attr("placeholder", "Enter Terms...");
    })
    $('.close').on('click', function() {
      $('.avenant').fadeOut();
      $('.confirm-modal').fadeOut();
    })
</script>
<script>
  $(document).find('#production-tab tr').each(function() {
    var actions = $(this).find('td').eq(9);
    var police  = $(this).find('td').eq(1).html();
    var etatP   =  $(this).find('td').eq(7).html();
    var disabledLink = actions .find('ul .not-allowed a');
      if(etatP=='Annulé'){
        disabledLink.css('cursor','not-allowed');
        disabledLink.removeAttr("href");
      }else if(etatP=='En cours...'){
          var avenant = actions.find('ul .get-avenant');
          avenant.find('a').on('click',function(){
            $('.avenant').fadeIn();
          })
          actions.find('ul li .annul-police').on('click',function(){
          $('.conf-msg').text('Confirmez-vous l\'annulation de la police ? : '+police +' ?')
          $('.confirm-modal').fadeIn();
          var idPolice = $(this).find('input').val();
          var supprUrl = '../../forInt_v2/controllers/users_routes.php?action=annul&idPolice='+idPolice ;
          $('#idPol').attr("href", supprUrl); 
        })
      }
  })
</script>
</body>
</html>
