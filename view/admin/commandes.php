<!DOCTYPE html>
<html>
<?php
$assets = './assets/';
$vendor = './vendor/';
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

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href=<?php echo $assets."admin-tools/admin-forms/css/admin-forms.css>";?>

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href=<?php echo $assets."skin/default_skin/css/theme_default.css>";?>

    <!-- Favicon -->
    <link rel="shortcut icon" href=<?php echo $assets."img/favicon.ico>";?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="ecom-products-page">

    <!-- Start: Theme Preview Pane -->
    <div id="skin-toolbox">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-icon">
          <i class="fa fa-gear text-primary"></i>
        </span>
                <span class="panel-title"> Theme Options</span>
            </div>
            <div class="panel-body pn">
                <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                    <li class="active">
                        <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                    </li>
                    <li>
                        <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                    </li>
                    <li>
                        <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                    </li>
                </ul>
                <div class="tab-content p20 ptn pb15">
                    <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                        <form id="toolbox-header-skin">
                            <h4 class="mv20">Header Skins</h4>
                            <div class="skin-toolbox-swatches">
                                <div class="checkbox-custom checkbox-disabled fill mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin8" checked value="">
                                    <label for="headerSkin8">Light</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-primary mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                    <label for="headerSkin1">Primary</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-info mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                    <label for="headerSkin3">Info</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-warning mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                    <label for="headerSkin4">Warning</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-danger mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                    <label for="headerSkin5">Danger</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-alert mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                    <label for="headerSkin6">Alert</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-system mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                    <label for="headerSkin7">System</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-success mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                    <label for="headerSkin2">Success</label>
                                </div>
                                <div class="checkbox-custom fill mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                    <label for="headerSkin9">Dark</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                        <form id="toolbox-sidebar-skin">
                            <h4 class="mv20">Sidebar Skins</h4>
                            <div class="skin-toolbox-swatches">
                                <div class="checkbox-custom fill mb5">
                                    <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                    <label for="sidebarSkin3">Dark</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-disabled mb5">
                                    <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                    <label for="sidebarSkin1">Light</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-light mb5">
                                    <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                    <label for="sidebarSkin2">Lighter</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                        <form id="toolbox-settings-misc">
                            <h4 class="mv20 mtn">Layout Options</h4>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" checked="" id="header-option">
                                    <label for="header-option">Fixed Header</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" checked="" id="sidebar-option">
                                    <label for="sidebar-option">Fixed Sidebar</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" id="breadcrumb-option">
                                    <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" id="breadcrumb-hidden">
                                    <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                                </div>
                            </div>
                            <h4 class="mv20">Layout Options</h4>
                            <div class="form-group">
                                <div class="radio-custom mb5">
                                    <input type="radio" id="fullwidth-option" checked name="layout-option">
                                    <label for="fullwidth-option">Fullwidth Layout</label>
                                </div>
                            </div>
                            <div class="form-group mb20">
                                <div class="radio-custom radio-disabled mb5">
                                    <input type="radio" id="boxed-option" name="layout-option" disabled>
                                    <label for="boxed-option">Boxed Layout
                    <b class="text-muted">(Coming Soon)</b>
                  </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-group mn br-t p15">
                    <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Theme Preview Pane -->

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top">
            <div class="navbar-branding">
                <a class="navbar-brand" href="admin_index.php">
                    <b>Admin</b>Designs
                </a>
                <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a class="sidebar-menu-toggle" href="#">
                        <span class="ad ad-ruby fs18"></span>
                    </a>
                </li>
                <li>
                    <a class="topbar-menu-toggle" href="#">
                        <span class="ad ad-wand fs16"></span>
                    </a>
                </li>
                <li class="hidden-xs">
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="ad ad-screen-full fs18"></span>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-left navbar-search" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search..." value="Search...">
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="ad ad-radio-tower fs18"></span>
                    </a>
                    <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">
                        <li class="dropdown-header">
                            <span class="dropdown-title"> Notifications</span>
                            <span class="label label-warning">12</span>
                        </li>
                        <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                                <h5 class="media-heading">Article
                                    <small class="text-muted">- 08/16/22</small>
                                </h5> Last Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                                <h5 class="media-heading mv5">Article
                                    <small> - 08/16/22</small>
                                </h5>
                                Last Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                                <h5 class="media-heading">Article
                                    <small class="text-muted">- 08/16/22</small>
                                </h5> Last Updated 36 days ago by
                                <a class="text-system" href="#"> Max </a>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
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
                        <span class="flag-xs flag-us"></span> US
                    </a>
                    <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="flag-xs flag-in mr10"></span> Hindu </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="flag-xs flag-es mr10"></span> Spanish </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-divider hidden-xs">
                    <i class="fa fa-circle"></i>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15"> John.Smith
                        <span class="caret caret-tp hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                        <li class="dropdown-header clearfix">
                            <div class="pull-left ml10">
                                <select id="user-status">
                  <optgroup label="Current Status:">
                    <option value="1-1">Away</option>
                    <option value="1-2">Offline</option>
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                </select>
                            </div>

                            <div class="pull-right mr10">
                                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Client</option>
                    <option value="1-2">Editor</option>
                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                </select>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-envelope"></span> Messages
                                <span class="label label-warning">2</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-user"></span> Friends
                                <span class="label label-warning">6</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-gear"></span> Account Settings </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-power-off"></span> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary affix">
            <?php include('menu_admin.php');?>
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <?php include('top_admin.php');?>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
            <header id="topbar" class="ph10">
                <div class="topbar-left">
                    <ul class="nav nav-list nav-list-topbar pull-left">
                        <li class="active">
                            <a href="../controllers/routes.php?action=dashboard">Dashboard</a>
                        </li>
                        <li>
                            <a href="../controllers/routes.php?action=listeUsers">Utilisateurs</a>
                        </li>
                        <li>
                            <a href="../controllers/routes.php?action=productions">Production</a>
                        </li>
                        <li>
                            <a href="../controllers/routes.php?action=bureaux">Bureaux</a>
                        </li>
                        <li>
                            <a href="../controllers/routes.php?action=commandes">Commandes</a>
                        </li>
                        <li>
                            <a href="../controllers/routes.php?action=dotations">Dotations</a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-right hidden-xs hidden-sm">
                    <a class="btn btn-default btn-sm light fw600 ml10" id='new-user' disabled>
                        <span class="fa fa-plus pr5"></span> Nouvel utilisateur</a>
                    <a class="btn btn-default btn-sm light fw600 ml10" id='new-office' disabled>
                        <span class="fa fa-plus pr5"></span> Nouveau bureau</a>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-center -->
                <div class="tray tray-center">

                    <!-- create new order panel -->
                    <div class="panel mb25 mt5">
                        <div class="panel-heading">
                            <span class="panel-title hidden-xs"> Add New Product</span>
                            <ul class="nav panel-tabs-border panel-tabs">
                                <li class="active">
                                    <a href="#tab1_1" data-toggle="tab">General</a>
                                </li>
                                <li>
                                    <a href="#tab1_2" data-toggle="tab">Description</a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body p20 pb10">
                            <div class="tab-content pn br-n admin-form">
                                <div id="tab1_1" class="tab-pane active">

                                    <div class="section row mbn">
                                        <div class="col-md-4">
                                            <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail mb20">
                                                    <img data-src="holder.js/100%x140" alt="holder">
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7 pr5">
                                                        <input type="text" name="name2" id="name2" class="text-center event-name gui-input br-light bg-light" placeholder="Img Keywords">
                                                        <label for="name2" class="field-icon"></label>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <span class="button btn-system btn-file btn-block">
                              <span class="fileupload-new">Select</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 pl15">
                                            <div class="section mb10">
                                                <label for="name2" class="field prepend-icon">
                          <input type="text" name="name2" id="name2" class="event-name gui-input br-light light" placeholder="Product Title">
                          <label for="name2" class="field-icon">
                            <i class="fa fa-tag"></i>
                          </label>
                                                </label>
                                            </div>
                                            <div class="section mb10">
                                                <label class="field prepend-icon">
                          <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="comment" placeholder="Product Description"></textarea>
                          <label for="comment" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                                                <span class="input-footer hidden">
                            <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div id="tab1_2" class="tab-pane">

                                    <div class="section row">
                                        <div class="col-md-6">
                                            <label for="product-category" class="field select">
                        <select id="product-category" name="product-category">
                          <option value="0" selected="selected">Product Category...</option>
                          <option value="1">Software</option>
                          <option value="2">Computers</option>
                          <option value="3">Gadgets</option>
                          <option value="4">Clothing</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="col-md-6">
                                            <label class="field select">
                        <select id="product-status" name="product-status">
                          <option value="0" selected="selected">Product Availability</option>
                          <option value="1">Available</option>
                          <option value="2">Unavailable</option>
                          <option value="3">Discontinued</option>
                          <option value="4">Out of Stock</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                    <!-- end section row section -->

                                    <div class="section row">
                                        <div class="col-md-4">
                                            <label for="product-price" class="field prepend-icon">
                        <input type="text" name="product-price" id="product-price" class="gui-input" placeholder="Product Price...">
                        <label for="product-price" class="field-icon">
                          <i class="fa fa-usd"></i>
                        </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="col-md-4">
                                            <label for="product-vendor" class="field prepend-icon">
                        <input type="text" name="product-vendor" id="product-vendor" class="gui-input" placeholder="Vendor Source...">
                        <label for="product-vendor" class="field-icon">
                          <i class="fa fa-shopping-cart"></i>
                        </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="col-md-4">
                                            <label for="product-sku" class="field prepend-icon">
                        <input type="text" name="product-sku" id="product-sku" class="gui-input" placeholder="Product SKU...">
                        <label for="product-sku" class="field-icon">
                          <i class="fa fa-barcode"></i>
                        </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                    <!-- end section row section -->

                                    <div class="section">
                                        <input id="tagsinput" type="text" value="Software, Adobe, Photoshop, Editor, Commercial">
                                    </div>
                                    <!-- end section row section -->

                                    <hr class="short alt">

                                    <div class="section row mbn">
                                        <div class="col-sm-8">
                                            <label class="field option mt10">
                        <input type="checkbox" name="info" checked>
                        <span class="checkbox"></span>Save Customer
                        <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                      </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-right">
                                                <button class="btn btn-primary" type="button">Save Order</button>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <div id="tab1_3" class="tab-pane">

                                    <div class="section">
                                        <label for="lastaddr" class="field prepend-icon">
                      <input type="text" name="lastaddr" id="lastaddr" class="gui-input" placeholder="Street address 2">
                      <label for="lastaddr" class="field-icon">
                        <i class="fa fa-map-marker"></i>
                      </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label class="field select">
                      <select id="location" name="location">
                        <option value="">Select country...</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan Republic</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BB">Barbados</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="C2">China Worldwide</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croatia</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="CD">Democratic Republic of the Congo</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="GA">Gabon Republic</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LS">Lesotho</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn Islands</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="QA">Qatar</option>
                        <option value="CG">Republic of the Congo</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis Anguilla</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">São Tomé and Príncipe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="KR">South Korea</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="LC">St. Lucia</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UY">Uruguay</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican City State</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                      </select>
                      <i class="arrow double"></i>
                    </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section row">
                                        <div class="col-md-3">
                                            <label for="zip" class="field prepend-icon">
                        <input type="text" name="zip" id="zip" class="gui-input" placeholder="Zip">
                        <label for="zip" class="field-icon">
                          <i class="fa fa-certificate"></i>
                        </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="col-md-4">
                                            <label for="city" class="field prepend-icon">
                        <input type="text" name="city" id="city" class="gui-input" placeholder="City">
                        <label for="city" class="field-icon">
                          <i class="fa fa-building-o"></i>
                        </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="col-md-5">
                                            <label for="states" class="field select">
                        <select id="states" name="states">
                          <option value="">Choose state</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="CO">Colorado</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="DC">District Of Columbia</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="HI">Hawaii</option>
                          <option value="ID">Idaho</option>
                          <option value="IL">Illinois</option>
                          <option value="IN">Indiana</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NV">Nevada</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NM">New Mexico</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="ND">North Dakota</option>
                          <option value="OH">Ohio</option>
                          <option value="OK">Oklahoma</option>
                          <option value="OR">Oregon</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="SD">South Dakota</option>
                          <option value="TN">Tennessee</option>
                          <option value="TX">Texas</option>
                          <option value="UT">Utah</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WA">Washington</option>
                          <option value="WV">West Virginia</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                                        </div>
                                        <!-- end .col8 section -->

                                    </div>
                                    <!-- end section row section -->

                                    <div class="section row mbn">
                                        <div class="col-sm-8">
                                            <label class="field option mt10">
                        <input type="checkbox" name="info" checked>
                        <span class="checkbox"></span>Save Customer
                        <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                      </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-right">
                                                <button class="btn btn-primary" type="button">Save Order</button>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end section -->


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- recent orders table -->
                    <div class="panel">
                        <div class="panel-menu p12 admin-form theme-primary">
                            <div class="row">
                                <div class="col-md-5">
                                    <label class="field select">
                    <select id="filter-category" name="filter-category">
                      <option value="0">Filter by Category</option>
                      <option value="1">Smart Phones</option>
                      <option value="2">Smart Watches</option>
                      <option value="3">Notebooks</option>
                      <option value="4">Desktops</option>
                      <option value="5">Music Players</option>
                    </select>
                    <i class="arrow"></i>
                  </label>
                                </div>
                                <div class="col-md-5">
                                    <label class="field select">
                    <select id="filter-status" name="filter-status">
                      <option value="0">Filter by Status</option>
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                      <option value="3">Low Stock</option>
                      <option value="4">Out of Stock</option>
                    </select>
                    <i class="arrow"></i>
                  </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="field select">
                    <select id="bulk-action" name="bulk-action">
                      <option value="0">Actions</option>
                      <option value="1">Edit</option>
                      <option value="2">Delete</option>
                      <option value="3">Active</option>
                      <option value="4">Inactive</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <div class="table-responsive">
                                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="text-center">Select</th>
                                            <th class="">Image</th>
                                            <th class="">Product Title</th>
                                            <th class="">SKU</th>
                                            <th class="">Price</th>
                                            <th class="">Stock</th>
                                            <th class="text-right">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_1.jpg">
                                            </td>
                                            <td class="">Apple Ipod 4G - Silver</td>
                                            <td class="">#21362</td>
                                            <td class="">$215</td>
                                            <td class="">1,400</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_2.jpg">
                                            </td>
                                            <td class="">Apple Smart Watch - 1G</td>
                                            <td class="">#15262</td>
                                            <td class="">$455</td>
                                            <td class="">2,100</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_6.jpg">
                                            </td>
                                            <td class="">Apple Macbook 4th Gen - Silver</td>
                                            <td class="">#66362</td>
                                            <td class="">$1699</td>
                                            <td class="">6,100</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_7.jpg">
                                            </td>
                                            <td class="">Apple Iphone 16GB - Silver</td>
                                            <td class="">#51362</td>
                                            <td class="">$1299</td>
                                            <td class="">5,200</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_3.jpg">
                                            </td>
                                            <td class="">Apple Ipod Nano 2G - Silver</td>
                                            <td class="">#4132</td>
                                            <td class="">$995</td>
                                            <td class="">11,000</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_4.jpg">
                                            </td>
                                            <td class="">Apple Macbook 3rd Gen - Silver</td>
                                            <td class="">#21362</td>
                                            <td class="">$1,150</td>
                                            <td class="">4,300</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_2.jpg">
                                            </td>
                                            <td class="">Apple Smart Watch - 1G</td>
                                            <td class="">#15262</td>
                                            <td class="">$455</td>
                                            <td class="text-warning">
                                                <b>145</b>
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Disabled
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_5.jpg">
                                            </td>
                                            <td class="">Apple iMac 32" - Silver</td>
                                            <td class="">#21362</td>
                                            <td class="">$1299</td>
                                            <td class="text-warning">
                                                <b>180</b>
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Disabled
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_3.jpg">
                                            </td>
                                            <td class="">Apple Ipod Nano 2G - Silver</td>
                                            <td class="">#4132</td>
                                            <td class="">$995</td>
                                            <td class="text-danger">
                                                <b>0 - Sold Out</b>
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Sold Out
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_6.jpg">
                                            </td>
                                            <td class="">Apple Macbook 4th Gen - Silver</td>
                                            <td class="">#66362</td>
                                            <td class="">$1699</td>
                                            <td class="text-danger">
                                                <b>0 - Sold Out</b>
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Sold Out
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/stock/products/thumb_7.jpg">
                                            </td>
                                            <td class="">Apple Iphone 16GB - Silver</td>
                                            <td class="">#51362</td>
                                            <td class="">$1299</td>
                                            <td class="text-danger">
                                                <b>0 - Sold Out</b>
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Sold Out
                            <span class="caret ml5"></span>
                          </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Complete</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end: .tray-center -->

                <!-- begin: .tray-right -->
                <aside class="tray tray-right tray290">

                    <!-- menu quick links -->
                    <div class="admin-form">

                        <h4> Filter Products</h4>

                        <hr class="short">

                        <div class="section mb15">
                            <label for="order-id" class="field prepend-icon">
                <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="Product SKU #">
                <label for="order-id" class="field-icon">
                  <i class="fa fa-tag"></i>
                </label>
                            </label>
                        </div>

                        <h5><small>Price Range($)</small></h5>
                        <div class="section row mb15">
                            <div class="col-md-6">
                                <label for="price1" class="field prepend-icon">
                  <input type="text" name="price1" id="price1" class="gui-input" placeholder="0">
                  <label for="price1" class="field-icon">
                    <i class="fa fa-usd"></i>
                  </label>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="price2" class="field prepend-icon">
                  <input type="text" name="price2" id="price2" class="gui-input" placeholder="1000">
                  <label for="price2" class="field-icon">
                    <i class="fa fa-usd"></i>
                  </label>
                                </label>
                            </div>
                        </div>

                        <h5><small>Sales Date</small></h5>
                        <div class="section row">
                            <div class="col-md-6">
                                <label for="date1" class="field prepend-icon">
                  <input type="text" name="date1" id="date1" class="gui-input" placeholder="01/01/15">
                  <label for="date1" class="field-icon">
                    <i class="fa fa-calendar"></i>
                  </label>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="date2" class="field prepend-icon">
                  <input type="text" name="date2" id="date2" class="gui-input" placeholder="01/31/15">
                  <label for="date2" class="field-icon">
                    <i class="fa fa-calendar"></i>
                  </label>
                                </label>
                            </div>
                        </div>

                        <h5><small>Search Categories</small></h5>
                        <div class="section mb15">
                            <label class="field select">
                <select id="filter-categories" name="filter-categories">
                  <option value="0" selected="selected">Filter by Categories</option>
                  <option value="1">Electronics</option>
                  <option value="2">Software</option>
                </select>
                <i class="arrow double"></i>
              </label>
                        </div>

                        <h5><small>Search Customers</small></h5>
                        <div class="section">
                            <label class="field select">
                <select id="filter-customers" name="filter-customers">
                  <option value="0" selected="selected">Filter by Vendor</option>
                  <option value="1">Michael</option>
                  <option value="2">David</option>
                  <option value="3">Sara</option>
                  <option value="4">Tasha</option>
                </select>
                <i class="arrow double"></i>
              </label>
                        </div>

                        <hr class="short">

                        <div class="section">
                            <button class="btn btn-default btn-sm ph25" type="button">Search</button>
                            <label class="field option ml15">
                  <input type="checkbox" name="info">
                  <span class="checkbox"></span>
                  <span class="text-muted">Save Search</span>
                </label>
                        </div>

                    </div>

                </aside>
                <!-- end: .tray-right -->

            </section>
            <!-- End: Content -->

        </section>

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano affix">

            <!-- Start: Sidebar Right Content -->
            <div class="sidebar-right-content nano-content p15">
                <h5 class="title-divider text-muted mb20"> Server Statistics
                    <span class="pull-right"> 2013
              <i class="fa fa-caret-down ml5"></i>
            </span>
                </h5>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                        <span class="fs11">DB Request</span>
                    </div>
                </div>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                        <span class="fs11 text-left">Server Load</span>
                    </div>
                </div>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                        <span class="fs11 text-left">Server Connections</span>
                    </div>
                </div>
                <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">132</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-success-dark mn">
                            <i class="fa fa-caret-up"></i> 13.2% </h3>
                    </div>
                </div>
                <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">212</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-success-dark mn">
                            <i class="fa fa-caret-up"></i> 25.6% </h3>
                    </div>
                </div>
                <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">82.5</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-danger mn">
                            <i class="fa fa-caret-down"></i> 17.9% </h3>
                    </div>
                </div>
                <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
                    <span class="pull-right text-primary fw600">USA</span>
                </h5>
            </div>

        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <?php echo'
    <script src=';echo $vendor.'jquery/jquery-1.11.1.min.js></script>
    <script src=';echo $vendor.'jquery/jquery_ui/jquery-ui.min.js></script>

    <!-- FileUpload JS -->
    <script src=';echo $vendor.'plugins/fileupload/fileupload.js></script>
    <script src=';echo $vendor.'plugins/holder/holder.min.js></script>

    <!-- Tagmanager JS -->
    <script src=';echo $vendor.'plugins/tagsinput/tagsinput.min.js></script>

    <!-- Theme Javascript -->
    <script src=';echo $assets.'js/utility/utility.js></script>
    <script src=';echo $assets.'js/demo/demo.js></script>
    <script src=';echo $assets.'js/main.js></script>
    <script src=';echo $assets.'js/adds.js></script>
    ';?>
</body>

</html>