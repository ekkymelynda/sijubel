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

</body>

</html>

<!-- End Footer -->