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

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme_default.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="ecommerce-page">

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
                <a class="navbar-brand" href="dashboard.html">
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
                <?php include('top_bar.php');?>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-center -->
                <div class="tray tray-center">
                    <!-- recent orders table -->
                    <div class="panel">
                        <div class="panel-menu admin-form theme-primary">
                            <div class="row">
                                <div class="col-md-4">
                                <label for="filter-datepicker" class="field prepend-picker-icon">
                                    <input type="text" value="02/03/2015" id="filter-datepicker" name="filter-datepicker" class="gui-input" placeholder="Filter by Date">
                                </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="field select">
                                <select id="filter-status" name="filter-status">
                                <option value="0">Filter by Status</option>
                                <option value="1">Edit</option>
                                <option value="2">Delete</option>
                                <option value="3">Active</option>
                                <option value="4">Inactive</option>
                                </select>
                                <i class="arrow double"></i>
                            </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="field select">
                    <select id="filter-customer" name="filter-customer">
                      <option value="0">Filter Customer</option>
                      <option value="1">Alan</option>
                      <option value="2">Susan</option>
                      <option value="3">Louis</option>
                      <option value="4">Randy</option>
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
                                            <th class="">Order Date</th>
                                            <th class="">Order ID</th>
                                            <th class="">Customer</th>
                                            <th class="">Notes</th>
                                            <th class="text-center">Order Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                                <span>Louis Renold</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                                <span>Louis Renold</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                                                <span>Sara Loft</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/3.jpg">
                                                <span>Frank Roles</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                                                <span>Michael Runes</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                                                <span>Amanda Marshall</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                                <span>Terry Planes</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                                                <span>Michael Runes</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                                                <span>Amanda Marshall</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                                <span>Terry Planes</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                                                <span>Amanda Marshall</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                                <span>Terry Planes</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
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
                                            <td class="">
                                                <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                                            </td>
                                            <td class="">
                                                01/11/2015
                                            </td>
                                            <td class="">#50362061</td>
                                            <td class="w175">
                                                <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                                <span>Terry Planes</span>
                                            </td>
                                            <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
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
    <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Admin Forms JS -->
    <script src="assets/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js"></script>

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

            // select dropdowns - placeholder like creation
            var selectList = $('.admin-form select');
            selectList.each(function(i, e) {
                $(e).on('change', function() {
                    if ($(e).val() == "0") $(e).addClass("empty");
                    else $(e).removeClass("empty")
                });
            });
            selectList.each(function(i, e) {
                $(e).change();
            });

            // Init datepicker widget
            $('#filter-datepicker').datepicker({
                numberOfMonths: 1,
                showOn: 'both',
                buttonText: '<i class="fa fa-calendar-o"></i>',
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

        });
    </script>
    <!-- END: PAGE SCRIPTS -->
</body>

</html>