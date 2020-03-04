<?php
$assets = 'http://localhost/forint_v2/assets/';
$routes = 'http://192.168.72.249:2702/forint_v2/controllers/users_routes.php';
 // include('./sessions.php');
?><!--Header include-->
    <!-- Start: Header -->
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


    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar-Dropdown -->
      <div id="topbar-dropmenu">
        <div class="topbar-menu row">
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
            <span class="metro-icon glyphicon glyphicon-headphones"></span>
              <p class="metro-title">Souscription</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-user"></span>
              <p class="metro-title">Consulter mes contrats</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-headphones"></span>
              <p class="metro-title">Simulation</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon fa fa-gears"></span>
              <p class="metro-title">Consulter mes projets</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-facetime-video"></span>
              <p class="metro-title">Faire une commande</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-picture"></span>
              <p class="metro-title">Voire mes garanties</p>
            </a>
          </div>
        </div>
      </div>
      <!-- End: Topbar-Dropdown -->

      <!-- Start: Topbar -->
      <header id="topbar" class="hidden">
        <div class="topbar-left">
          <h3>SOUSCRIPTION</h3>
        </div>
        <div class="topbar-right">
          <div class="ib topbar-dropdown">
            <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
            <select id="topbar-multiple" class="hidden">
              <optgroup label="Filter By:">
                <option value="1-1">Last 30 Days</option>
                <option value="1-2" selected="selected">Last 60 Days</option>
                <option value="1-3">Last Year</option>
              </optgroup>
            </select>
          </div>
          <div class="ml15 ib va-m" id="toggle_sidemenu_r">
            <a href="#" class="pl5">
              <i class="fa fa-sign-in fs22 text-primary"></i>
              <span class="badge badge-hero badge-danger">3</span>
            </a>
          </div>
        </div>
      </header>
      <!-- End: Topbar -->

   

    </section>

 
