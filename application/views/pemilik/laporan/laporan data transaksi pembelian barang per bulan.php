   <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Laporan Data Transaksi Pembelian Barang Per Bulan</h1>
      <ol class="breadcrumb">
        <li>Laporan</li>
        <li>Data Transaksi Pembelian Barang Per Bulan</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Laporan Data Transaksi Pembelian Barang Tahun 2016 Bulan Maret</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>ID Transaksi Pembelian</th>
                <th>ID Pembeli</th>
                <th>ID Pegawai</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Bayar</th>
                <th>Kembalian</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h as $row){?>
              <tr>
                 <td><?php echo $row->ID_TPE;?></td>
                 <td><?php echo $row->ID_PML;?></td>
                 <td><?php echo $row->ID_SPL;?></td>
                 <td><?php echo $row->TGL_TPE;?></td>
                 <td><?php echo $row->TOTAL_TPE;?></td>
                 <td><?php echo $row->BAYAR_TPE;?></td>
                 <td><?php echo $row->KEMBALIAN_TPE;?></td>
        <?php }?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->

      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Total : Rp 250000, 00</h3>
        </header>
        <div class="panel-body">
        </div>
      </div>
      <!-- End Panel Basic -->
      
    </div>
  </div>
  <!-- End Page -->