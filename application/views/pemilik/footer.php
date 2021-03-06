<!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2016 Sistem Informasi Jual Beli Toko Djondol Pelangi</span>
    <div class="site-footer-right">
      Dibuat <i class="red-600 wb wb-heart"></i> oleh Kelompok C08
    </div>
  </footer>

  <!-- Core  -->
  <script src="<?php  echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="<?php  echo base_url(); ?>assets/vendor/switchery/switchery.min.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/intro-js/intro.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/screenfull/screenfull.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="<?php  echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

  <script src="<?php  echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

  <!-- Scripts -->
  <script src="<?php  echo base_url(); ?>assets/js/core.js"></script>
  <script src="<?php  echo base_url(); ?>assets/js/site.js"></script>

  <script src="<?php  echo base_url(); ?>assets/js/sections/menu.js"></script>
  <script src="<?php  echo base_url(); ?>assets/js/sections/menubar.js"></script>
  <script src="<?php  echo base_url(); ?>assets/js/sections/sidebar.js"></script>

  <script src="<?php  echo base_url(); ?>assets/js/configs/config-colors.js"></script>
  <script src="<?php  echo base_url(); ?>assets/js/configs/config-tour.js"></script>

  <script src="<?php  echo base_url(); ?>assets/js/components/asscrollable.js"></script>
  <script src="<?php  echo base_url(); ?>assets/js/components/animsition.js"></script>
  <script src="<?php  echo base_url(); ?>assets/js/components/slidepanel.js"></script>
  <script src="<?php  echo base_url(); ?>assets/js/components/switchery.js"></script>
  <script src="<?php  echo base_url(); ?>assets/js/components/jquery-placeholder.js"></script>

  <script src="<?php  echo base_url(); ?>assets/js/components/matchheight.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

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
            IDtransaksipenjualan: {
              validators: {
                notEmpty: {
                  message: 'ID transaksi penjualan harus diisi'
                },
                stringLength: {
                  min: 5,
                  max: 5,
                  message: 'ID transaksi penjualan harus 5 character'
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9_\.]+$/,
                  message: 'The username can only consist of alphabetical, number, dot and underscore'
                }
              }
            },
            IDpembeli: {
              validators: {
                notEmpty: {
                  message: 'ID pembeli harus diisi'
                },
                stringLength: {
                  min: 5,
                  max: 5,
                  message: 'ID pembeli  harus 5 character'
                }
              }
            },
              IDPegawai: {
              validators: {
                notEmpty: {
                  message: 'ID Pegawai harus diisi'
                },
                stringLength: {
                  min: 5,
                  max: 5,
                  message: 'ID Pegawai  harus 5 character'
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
                  message: 'ID Barang harus diisi'
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
              HargaJualBarang: {
              validators: {
                notEmpty: {
                  message: 'Harga Jual Barang harus diisi'
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

<!-- End Footer -->