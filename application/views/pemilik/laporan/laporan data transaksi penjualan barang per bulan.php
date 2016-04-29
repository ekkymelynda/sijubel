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
          <div class="panel-actions"></div>
          <h3 class="panel-title">Laporan Data Transaksi Penjualan Barang Tahun Bulan ke- </h3>
        </header><?php }?>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>ID Transaksi Penjualan</th>
                <th>ID Pembeli</th>
                <th>ID Pegawai</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Bayar</th>
                <th>Kembalian</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($h as $row){?>
                 <td><?php echo $row->ID_TPU;?></td>
                 <td><?php echo $row->ID_PGW;?></td>
                 <td><?php echo $row->ID_PMB;?></td>
                 <td><?php echo $row->TGL_TPU;?></td>
                 <td><?php echo $row->TOTAL_TPU;?></td>
                 <td><?php echo $row->BAYAR_TPU;?></td>
                 <td><?php echo $row->KEMBALIAN_TPU;?></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->

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