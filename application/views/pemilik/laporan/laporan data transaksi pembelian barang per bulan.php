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
          <h3 class="panel-title">Pilih Tahun dan Bulan</h3>
        </header>
        <div class="panel-body">
          <form class="form-horizontal" id="exampleStandardForm" autocomplete="on" method="POST" action="read-kamar.php">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tahun</label>
                  <div class="col-sm-9">
                      <select class="form-control" name="requiredSelect" required="on">
                          <option value="">Pilih salah satu</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Bulan</label>
                  <div class="col-sm-9">
                      <select class="form-control" name="jenis" required="on">
                          <option value="">Pilih salah satu</option>
                          <option value="Januari">Januari</option>
                          <option value="Februari">Februari</option>
                          <option value="Maret">Maret</option>
                          <option value="April">April</option>
                          <option value="Mei">Mei</option>
                          <option value="Juni">Juni</option>
                          <option value="Juli">Juli</option>
                          <option value="Agustus">Agustus</option>
                          <option value="September">September</option>
                          <option value="Oktober">Oktober</option>
                          <option value="Nopember">Nopember</option>
                          <option value="Desember">Desember</option>
                        </select>
                  </div>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary" id="validateButton2">Pilih</button>
                </div>
              </form>
        </div>
      </div>
      <!-- End Panel Basic -->

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
              <tr>
                <td>A0000</td>
                <td>B0000</td>
                <td>C0000</td>
                <td>27 Maret 2016</td>
                <td>250000</td>
                <td>300000</td>
                <td>50000</td>
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