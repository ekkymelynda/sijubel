  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Hapus Data Pegawai</h1>
      <ol class="breadcrumb">
        <li>Pegawai</li>
        <li>Hapus</li>
      </ol>
    </div>
    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title">Hapus Data Pegawai</h4>
                <div class="example">
                  <?php foreach ($h->result() as $row){?>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <br>
                        <label><?php echo $row->ID_PGW;?></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama</label>
                        <br>
                        <label><?php echo $row->NAMA_PGW;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Password</label>
                      <br>
                      <label><?php echo $row->PSWD_PGW;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Alamat</label>
                      <br>
                      <label><?php echo $row->ALAMAT_PGW;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Telp</label>
                      <br>
                      <label><?php echo $row->NOTLP_PGW;?></label>
                    </div>
                    <div class="form-group">
                      <label>Apakah Anda yakin ingin menghapus data tersebut?</label>
                      <br>
                    </div>
                    <div class="form-group">
                      <form method="post" class="form-group" action="<?php echo base_url(); ?>pegawai/delete_pegawai/<?php echo $row->ID_PGW; }?>">
                        <button type="submit" class="btn btn-danger">Ya</button>
                      </form>
                      <form method="get" action="<?php echo base_url(); ?>pegawai/pegawai_lihat">
                        <button type="submit" class="btn btn-success">Tidak</button>
                      </form>
                    </div>
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