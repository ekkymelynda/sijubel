  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Lihat Laporan Total Keuntungan Penjualan Barang Per Bulan</h1>
      <ol class="breadcrumb">
        <li>Laporan</li>
        <li>Total Keuntungan Penjualan Barang Per Bulan</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic --><?php foreach ($h as $row){?>
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Laporan Total Keuntungan Penjualan Barang Tahun <?php echo $row->tahun;?> Bulan ke- <?php echo $row->bulan;?></h3>
        </header>
        <div class="panel-body">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Total : Rp <?php echo $row->total;?></h3>
          <?php }?>
        </div>
      </div>
      <!-- End Panel Basic -->
      
    </div>
  </div>
  <!-- End Page -->