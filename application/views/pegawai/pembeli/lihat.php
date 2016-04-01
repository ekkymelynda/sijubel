<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Lihat Pembeli | Sistem Informasi Jual Beli Toko Djondol Pelangi</title>

  <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="../../assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="../../assets/css/site.min.css">

  <link rel="stylesheet" href="../../assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="../../assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="../../assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="../../assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="../../assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="../../assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="../../assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables-responsive/dataTables.responsive.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="../../assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../../assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    @media (max-width: 480px) {
      .panel-actions .dataTables_length {
        display: none;
      }
    }
    
    @media (max-width: 320px) {
      .panel-actions .dataTables_filter {
        display: none;
      }
    }
    
    @media (max-width: 767px) {
      .dataTables_length {
        float: left;
      }
    }
    
    #exampleTableAddToolbar {
      padding-left: 30px;
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
  <script src="../../assets/vendor/modernizr/modernizr.js"></script>
  <script src="../../assets/vendor/breakpoints/breakpoints.js"></script>
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
        <img class="navbar-brand-logo" src="../../assets/images/logo.png" title="Sistem Informasi Jual Beli Toko Djondol Pelangi">
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
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/buttons.html" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Buat</span>
                  </a>
                </li>
                <li class="site-menu-item active">
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

  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Lihat Data Pembeli</h1>
      <ol class="breadcrumb">
        <li>Pembeli</li>
        <li>Lihat</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Lihat Data Pembeli</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>A0000</td>
                <td>Ekky Melynda</td>
                <td>Kampus ITS Sukolilo, Surabaya</td>
                <td>081234567890</td>
                <td class="text-nowrap">
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Ubah">
                    <a href="update-kamar.php"><i class="icon wb-wrench" aria-hidden="true"></i></a>
                  </button>
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Hapus">
                    <a href="delete-kamar.php"><i class="icon wb-close" aria-hidden="true"></i></a>
                  </button>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>
  <!-- End Page -->

  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 Sistem Informasi Jual Beli Toko Djondol Pelangi</span>
    <div class="site-footer-right">
      Dibuat <i class="red-600 wb wb-heart"></i> oleh <a href="http://themeforest.net/user/amazingSurge">Kelompok C08</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="../../assets/vendor/jquery/jquery.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="../../assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="../../assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="../../assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="../../assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="../../assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="../../assets/vendor/switchery/switchery.min.js"></script>
  <script src="../../assets/vendor/intro-js/intro.js"></script>
  <script src="../../assets/vendor/screenfull/screenfull.js"></script>
  <script src="../../assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="../../assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="../../assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="../../assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

  <!-- Scripts -->
  <script src="../../assets/js/core.js"></script>
  <script src="../../assets/js/site.js"></script>

  <script src="../../assets/js/sections/menu.js"></script>
  <script src="../../assets/js/sections/menubar.js"></script>
  <script src="../../assets/js/sections/sidebar.js"></script>

  <script src="../../assets/js/configs/config-colors.js"></script>
  <script src="../../assets/js/configs/config-tour.js"></script>

  <script src="../../assets/js/components/asscrollable.js"></script>
  <script src="../../assets/js/components/animsition.js"></script>
  <script src="../../assets/js/components/slidepanel.js"></script>
  <script src="../../assets/js/components/switchery.js"></script>
  <script src="../../assets/js/components/datatables.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Fixed Header Example
      // --------------------
      (function() {
        // initialize datatable
        var table = $('#exampleFixedHeader').DataTable({
          responsive: true,
          "bPaginate": false,
          "sDom": "t" // just show table, no other controls
        });

        // initialize FixedHeader
        var offsetTop = 0;
        if ($('.site-navbar').length > 0) {
          offsetTop = $('.site-navbar').eq(0).innerHeight();
        }
        var fixedHeader = new FixedHeader(table, {
          offsetTop: offsetTop
        });

        // redraw fixedHeaders as necessary
        $(window).resize(function() {
          fixedHeader._fnUpdateClones(true);
          fixedHeader._fnUpdatePositions();
        });
      })();

      // Individual column searching
      // ---------------------------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            initComplete: function() {
              this.api().columns().every(function() {
                var column = this;
                var select = $(
                    '<select class="form-control width-full"><option value=""></option></select>'
                  )
                  .appendTo($(column.footer()).empty())
                  .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex(
                      $(this).val()
                    );

                    column
                      .search(val ? '^' + val + '$' : '',
                        true, false)
                      .draw();
                  });

                column.data().unique().sort().each(function(
                  d, j) {
                  select.append('<option value="' + d +
                    '">' + d + '</option>')
                });
              });
            }
          });

          $('#exampleTableSearch').DataTable(options);
        });
      })();

      // Table Tools
      // -----------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [
              [5, 10, 25, 50, -1],
              [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
              "sSwfPath": "../../assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
          });

          $('#exampleTableTools').dataTable(options);
        });
      })();

      // Table Add Row
      // -------------

      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var t = $('#exampleTableAdd').DataTable(defaults);

          $('#exampleTableAddBtn').on('click', function() {
            t.row.add([
              'Adam Doe',
              'New Row',
              'New Row',
              '30',
              '2015/10/15',
              '$20000'
            ]).draw();
          });
        });
      })();
    })(document, window, jQuery);
  </script>

</body>

</html>