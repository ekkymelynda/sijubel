  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Laporan Data Transaksi Penjualan Barang Per Bulan</h1>
      <ol class="breadcrumb">
        <li>Laporan</li>
        <li>Data Transaksi Penjualan Barang Per Bulan</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div><?php foreach ($i as $row){?>
          <h3 class="panel-title">Total : Rp <?php echo $row->total;?></h3>
        </header><?php }?>
        <div class="panel-body">
        </div>
      </div>
      <!-- End Panel Basic -->
      
    </div>
  </div>
  <!-- End Page -->