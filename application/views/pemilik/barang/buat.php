  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Buat Data Barang</h1>
      <ol class="breadcrumb">
        <li>Barang</li>
        <li>Buat</li>
      </ol>
    </div>
    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title">Buat Data Barang</h4>
                <div class="example">
                  <form autocomplete="off" action="<?php echo base_url();?>barang/insert_barang" method="post">
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="id_brg"
                        placeholder="A0000" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama Barang</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_brg"
                        placeholder="Pensil" autocomplete="off" />
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Jenis Barang</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="jenis_brg"
                        placeholder="ATK" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Harga Jual Barang</label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="harga_jual"
                      placeholder="3000" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Harga Beli Barang</label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="harga_beli"
                      placeholder="2000" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Keuntungan Barang</label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="keuntungan_brg"
                      placeholder="1000" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Jumlah Barang</label>
                      <input type="number" class="form-control" id="inputBasicEmail" name="jumlah_brg"
                      placeholder="60" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Status</label>
                      <input type="text" class="form-control" id="inputBasicPassword" name="status_brg"
                      placeholder="Tersedia" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Buat</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Example Basic Form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->