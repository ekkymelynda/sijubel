<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Buat Pembeli | Sistem Informasi Jual Beli Toko Djondol Pelangi</title>

  <link rel="apple-touch-icon" href="<?php  echo base_url(); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php  echo base_url(); ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/css/site.min.css">

  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/flag-icon-css/flag-icon.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    @media (min-width: 768px) and (max-width: 992px) {
      .form-inline .control-label {
        display: block;
      }
      .form-inline .form-group {
        margin-bottom: 20px;
        vertical-align: baseline;
      }
    }
  </style>

  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php  echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="">
        <img class="navbar-brand-logo" src="<?php  echo base_url(); ?>assets/images/logo.png" title="Sistem Informasi Jual Beli Toko Djondol Pelangi">
        <span class="navbar-brand-text"> Sijubel</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li role="presentation">
            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
          </li>    
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>

  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">PEGAWAI</li>
            <li class="site-menu-item has-sub active open">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Pembeli</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item active">
                  <a class="animsition-link" href="../uikit/buttons.html" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Buat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/colors.html" data-slug="uikit-colors">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lihat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/dropdowns.html" data-slug="uikit-dropdowns">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Ubah</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/list.html" data-slug="uikit-list">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Hapus</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="advanced">
                <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                <span class="site-menu-title">Transaksi Pejualan</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/animation.html" data-slug="advanced-animation">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Buat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/lightbox.html" data-slug="advanced-lightbox">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lihat</span>
                  </a>
                </li>
                <li class="site-menu-item hidden-xs">
                  <a href="javascript:void(0)" data-slug="advanced-tour">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Ubah</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/treeview.html" data-slug="advanced-treeview">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Hapus</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="structure">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Barang</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/alerts.html" data-slug="structure-alerts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lihat</span>
                  </a>
                </li>
              </ul>
            </li>
        </div>
      </div>
    </div>
  </div>