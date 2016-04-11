  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Buat Data Pegawai</h1>
      <ol class="breadcrumb">
        <li>Pegawai</li>
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
                <h4 class="example-title">Buat Data Pegawai</h4>
                <div class="example">
                  <form autocomplete="off" action="<?php echo base_url(); ?>pegawai/insert_pegawai" method="post">
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <input type="text" class="form-control" id="id_pgw" name="id_pgw"
                        placeholder="A0000" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama</label>
                        <input type="text" class="form-control" id="nama_pgw" name="nama_pgw"
                        placeholder="Ekky Melynda" autocomplete="off" />
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Password</label>
                        <input type="password" class="form-control" id="pswd_pgw" name="pswd_pgw"
                        placeholder="*****" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Alamat</label>
                      <input type="text" class="form-control" id="alamat_pgw" name="alamat_pgw"
                      placeholder="Kampus ITS Sukolilo, Surabaya" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Telp</label>
                      <input type="text" class="form-control" id="notlp_pgw" name="notlp_pgw"
                      placeholder="081234567890" autocomplete="off" />
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