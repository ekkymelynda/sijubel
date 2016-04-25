   <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Laporan Data Transaksi Penjualan Barang Per Hari</h1>
      <ol class="breadcrumb">
        <li>Laporan</li>
        <li>Data Transaksi Penjualan Barang Per Hari</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Pilih Tanggal</h3>
        </header>
        <div class="panel-body">
          <form autocomplete="off" action="laporan/penjualan_perhari_lihat">
              <div class="form-group row">
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputBasicFirstName" name="tgl_tpu" placeholder="" autocomplete="off" />
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Pilih</button>
                  </div>
                </div>
              </div>           
          </form>
        </div>
      </div>
      <!-- End Panel Basic -->

      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Laporan Data Transaksi Penjualan Barang Tanggal 27/03/2016</h3>
        </header>
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
              <?php foreach ($h->result() as $row){?>
              <tr>
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