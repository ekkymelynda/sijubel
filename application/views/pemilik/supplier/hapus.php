   <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Hapus Data Supplier</h1>
      <ol class="breadcrumb">
        <li>Supplier</li>
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
                <h4 class="example-title">Hapus Data Supplier</h4>
                <div class="example">
                  <?php foreach ($h->result() as $row){?>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <br>
                        <label><?php echo $row->ID_SPL;?></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama</label>
                        <br>
                        <label><?php echo $row->NAMA_SPL;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Perusahaan</label>
                      <br>
                      <label><?php echo $row->PERUSAHAAN_SPL;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Telp</label>
                      <br>
                      <label><?php echo $row->NOTLP_SPL;?></label>
                    </div>
                    <div class="form-group">
                      <form method="post" class="form-group" action="<?php echo base_url(); ?>supplier/delete_supplier/<?php echo $row->ID_SPL; }?>">
                        <button type="submit" class="btn btn-danger">Ya</button>
                      </form>
                      <form method="get" action="<?php echo base_url(); ?>supplier/supplier_lihat">
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