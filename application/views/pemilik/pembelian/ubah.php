<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Buat Transaksi Pembelian | Sistem Informasi Jual Beli Toko Djondol Pelangi</title>

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
  <link rel="stylesheet" href="../../assets/vendor/jquery-wizard/jquery-wizard.css">
  <link rel="stylesheet" href="../../assets/vendor/formvalidation/formValidation.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="../../assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../../assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


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
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="../../assets/images/logo.png" title="Remark">
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
            <li class="site-menu-category">ADMIN</li>
              <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Akun Admin</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
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
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Pegawai</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
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
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Supplier</span>
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
            <li class="site-menu-item has-sub  active open">
              <a href="javascript:void(0)" data-slug="advanced">
                <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                <span class="site-menu-title">Transaksi Pembelian</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item ">
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
                <li class="site-menu-item active">
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
        </div>
      </div>
    </div>
  </div>
    
  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Data Transaksi Pembelian</h1>
      <ol class="breadcrumb">
        <li><a href="../index.html">Transaksi pembelian</a></li>
        <li><a href="javascript:void(0)">Ubah</a></li>
      </ol>
    </div>
    <div class="page-content container-fluid">
      <div class="row">
        <div>
          <!-- Panel Wizard Form -->
          <div class="panel" id="exampleWizardForm">
            <div class="panel-heading">
              <h3 class="panel-title">Transaksi Pembelian</h3>
            </div>
            <div class="panel-body">
              <!-- Steps -->
              <div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
                <div class="step col-md-4 current" data-target="#exampleAccount" role="tab">
                  <span class="step-number">1</span>
                  <div class="step-desc">
                    <span class="step-title">Kode</span>
                    <p>Masukkan Tanggal dan Kode</p>
                  </div>
                </div>

                <div class="step col-md-4" data-target="#exampleBilling" role="tab">
                  <span class="step-number">2</span>
                  <div class="step-desc">
                    <span class="step-title">List Barang</span>
                    <p>Masukkan List Barang yang Dibeli</p>
                  </div>
                </div>

                <div class="step col-md-4" data-target="#exampleGetting" role="tab">
                  <span class="step-number">3</span>
                  <div class="step-desc">
                    <span class="step-title">Total</span>
                    <p>Total Pembelian</p>
                  </div>
                </div>
              </div>
              <!-- End Steps -->

              <!-- Wizard Content -->
              <div class="wizard-content">
                <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                  <form id="exampleAccountForm">
                    <div class="form-group">
                      <label class="control-label" for="inputPassword">Waktu Transaksi Pembelian</label>
                      <input type="date_time" class="form-control" id="inputPassword" name="password"
                      required="required">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Id Transaksi Pembelian</label>
                      <input type="text" class="form-control" id="inputUserName" name="IdTransaksiPembelian" required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Supplier</label>
                      <input type="text" class="form-control" id="inputPassword" name="IdSupplier"
                      required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Admin</label>
                      <input type="text" class="form-control" id="inputPassword" name="IdAdmin"
                      required="required">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleBilling" role="tabpanel">
                  <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Id Barang</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="IdBarang" placeholder="Id Barang" required="required">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputCVV">Nama Barang</label>
                      <input type="text" class="form-control" id="inputCVV" name="NamaBarang" placeholder="Nama Barang" required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputCVV">Harga Beli Barang</label>
                      <input type="text" class="form-control" id="inputCVV" name="HargaBeliBarang" placeholder="Harga Beli Barang" required="required">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleGetting" role="tabpanel">
                  <div class="text-center margin-vertical-20">
                    <h4>Total Pembelian : </h4> <!-- <?php diisi hasil jumlah total pembelian ?> -->
                  </div>
                    <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Bayar Transaksi</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number">
                    </div>
                    </form>
                    <div class="text-center margin-vertical-20">
                    <h4>Total Kembalian : </h4> <!-- <?php diisi hasil Bayar Transaksi - total pembelian ?> -->
                  </div>
                </div>
              </div>
              <!-- End Wizard Content -->

            </div>
          </div>
          <!-- End Panel Wizard One Form -->
        </div>

        
      </div>

    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2016 Sijubel</span>
    
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

  <script src="../../assets/vendor/formvalidation/formValidation.js"></script>
  <script src="../../assets/vendor/formvalidation/framework/bootstrap.js"></script>
  <script src="../../assets/vendor/matchheight/jquery.matchHeight-min.js"></script>
  <script src="../../assets/vendor/jquery-wizard/jquery-wizard.js"></script>

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
  <script src="../../assets/js/components/jquery-wizard.js"></script>
  <script src="../../assets/js/components/matchheight.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Example Wizard Form
      // -------------------
      (function() {
        // set up formvalidation
        $('#exampleAccountForm').formValidation({
          framework: 'bootstrap',
          fields: {
            IdTransaksiPembelian: {
              validators: {
                notEmpty: {
                  message: 'Id Transaksi Pembelian harus diisi'
                },
                stringLength: {
                  min: 5,
                  max: 5,
                  message: 'Id Transaksi Pembelian harus berisi 5 karakter'
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9_\.]+$/,
                  message: 'The username can only consist of alphabetical, number, dot and underscore'
                }
              }
            },
            IdSupplier: {
              validators: {
                notEmpty: {
                  message: 'Id Supplier harus diisi'
                },
                stringLength: {
                  min: 5,
                  max: 5,
                  message: 'Id Supplier harus berisi 5 karakter'
                }
              }
            },
              IdAdmin: {
              validators: {
                notEmpty: {
                  message: 'Id Admin harus diisi'
                },
                stringLength: {
                  min: 5,
                  max: 5,
                  message: 'Id Admin harus berisi 5 karakter'
                }
              }
            }
          }
        });

        $("#exampleBillingForm").formValidation({
          framework: 'bootstrap',
          fields: {
            IdBarang: {
              validators: {
                notEmpty: {
                  message: 'Id Barang harus diisi'
                },
                stringLength: {
                  min: 5,
                  max: 5,
                  message: 'Id Barang harus berisi 5 karakter'
                }
                // creditCard: {
                //   message: 'The credit card number is not valid'
                // }
              }
            },
            NamaBarang: {
              validators: {
                notEmpty: {
                  message: 'Nama Barang harus diisi'
                }
                // cvv: {
                //   creditCardField: 'number',
                //   message: 'The CVV number is not valid'
                // }
              }
            },
              HargaBeliBarang: {
              validators: {
                notEmpty: {
                  message: 'Harga Beli Barang harus diisi'
                }
                // cvv: {
                //   creditCardField: 'number',
                //   message: 'The CVV number is not valid'
                // }
              }
            } 
          }
        });

        // init the wizard
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          buttonsAppendTo: '.panel-body'
        });

        var wizard = $("#exampleWizardForm").wizard(options).data(
          'wizard');

        // setup validator
        // http://formvalidation.io/api/#is-valid
        wizard.get("#exampleAccount").setValidator(function() {
          var fv = $("#exampleAccountForm").data('formValidation');
          fv.validate();

          if (!fv.isValid()) {
            return false;
          }

          return true;
        });

        wizard.get("#exampleBilling").setValidator(function() {
          var fv = $("#exampleBillingForm").data('formValidation');
          fv.validate();

          if (!fv.isValid()) {
            return false;
          }

          return true;
        });
      })();

      // Example Wizard Form Container
      // -----------------------------
      // http://formvalidation.io/api/#is-valid-container
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          onInit: function() {
            $('#exampleFormContainer').formValidation({
              framework: 'bootstrap',
              fields: {
                username: {
                  validators: {
                    notEmpty: {
                      message: 'The username is required'
                    }
                  }
                },
                password: {
                  validators: {
                    notEmpty: {
                      message: 'The password is required'
                    }
                  }
                },
                number: {
                  validators: {
                    notEmpty: {
                      message: 'The credit card number is not valid'
                    }
                  }
                },
                cvv: {
                  validators: {
                    notEmpty: {
                      message: 'The CVV number is required'
                    }
                  }
                }
              }
            });
          },
          validator: function() {
            var fv = $('#exampleFormContainer').data(
              'formValidation');

            var $this = $(this);

            // Validate the container
            fv.validateContainer($this);

            var isValidStep = fv.isValidContainer($this);
            if (isValidStep === false || isValidStep === null) {
              return false;
            }

            return true;
          },
          onFinish: function() {
            // $('#exampleFormContainer').submit();
          },
          buttonsAppendTo: '.panel-body'
        });

        $("#exampleWizardFormContainer").wizard(options);
      })();

      // Example Wizard Pager
      // --------------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");

        var options = $.extend(true, {}, defaults, {
          step: '.wizard-pane',
          templates: {
            buttons: function() {
              var options = this.options;
              return
                '<div class="btn-group" aria-label="Wizard Pager" role="group">' +
                '<button class="btn btn-default btn-outline" data-target="#' +
                this.id +
                '" data-wizard="back"><i class="icon wb-chevron-left" aria-hidden="true"></i></button>' +
                '<button class="btn btn-default btn-outline" data-target="#' +
                this.id +
                '" data-wizard="next"><i class="icon wb-chevron-right" aria-hidden="true"></i></button>' +
                '<button class="btn btn-default btn-outline" data-target="#' +
                this.id +
                '" data-wizard="finish"><i class="icon wb-check" aria-hidden="true"></i></button>' +
                '</div>';
            }
          },
          buttonsAppendTo: '.panel-actions'
        });

        $("#exampleWizardPager").wizard(options);
      })();

      // Example Wizard Progressbar
      // --------------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");

        var options = $.extend(true, {}, defaults, {
          step: '.wizard-pane',
          onInit: function() {
            this.$progressbar = this.$element.find('.progress-bar')
              .addClass('progress-bar-striped');
          },
          onBeforeShow: function(step) {
            step.$element.tab('show');
          },
          onFinish: function() {
            this.$progressbar.removeClass('progress-bar-striped').addClass(
              'progress-bar-success');
          },
          onAfterChange: function(prev, step) {
            var total = this.length();
            var current = step.index + 1;
            var percent = (current / total) * 100;

            this.$progressbar.css({
              width: percent + '%'
            }).find('.sr-only').text(current + '/' + total);
          },
          buttonsAppendTo: '.panel-body'
        });

        $("#exampleWizardProgressbar").wizard(options);
      })();

      // Example Wizard Tabs
      // -------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          step: '> .nav > li > a',
          onBeforeShow: function(step) {
            step.$element.tab('show');
          },
          classes: {
            step: {
              //done: 'color-done',
              error: 'color-error'
            }
          },
          onFinish: function() {
            alert('finish');
          },
          buttonsAppendTo: '.tab-content'
        });

        $("#exampleWizardTabs").wizard(options);
      })();

      // Example Wizard Accordion
      // ------------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          step: '.panel-title[data-toggle="collapse"]',
          classes: {
            step: {
              //done: 'color-done',
              error: 'color-error'
            }
          },
          templates: {
            buttons: function() {
              return '<div class="panel-footer">' + defaults.templates
                .buttons.call(this) + '</div>';
            }
          },
          onBeforeShow: function(step) {
            step.$pane.collapse('show');
          },

          onBeforeHide: function(step) {
            step.$pane.collapse('hide');
          },

          onFinish: function() {
            alert('finish');
          },

          buttonsAppendTo: '.panel-collapse'
        });

        $("#exampleWizardAccordion").wizard(options);
      })();

    })(document, window, jQuery);
  </script>

</body>

</html>