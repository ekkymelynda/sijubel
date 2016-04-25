  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Laporan Data Transaksi Pembelian Barang Per Hari</h1>
      <ol class="breadcrumb">
        <li>Laporan</li>
        <li>Data Transaksi Pembelian Barang Per Hari</li>
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
          <form class="form-horizontal" id="exampleStandardForm" autocomplete="on" method="POST" action="<?php echo base_url();?>laporan/laporan_pembelian_perhari">
              <div class="form-group row">
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputBasicFirstName" name="tgl_tpe" placeholder="" autocomplete="off" />
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
      
    </div>
  </div>
  <!-- End Page -->