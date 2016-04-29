  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Laporan Total Keuntungan Penjualan Barang Per Hari</h1>
      <ol class="breadcrumb">
        <li>Laporan</li>
        <li>Total Keuntungan Penjualan Per Hari</li>
      </ol>
    </div>

    <div class="page-content">

      <!-- Panel Basic --><?php foreach ($h as $row){?>
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Laporan Total Keuntungan Penjualan Barang Tanggal <?php echo $row->TGL_TPU;?></h3>
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