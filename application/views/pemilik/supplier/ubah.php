  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Data Supplier</h1>
      <ol class="breadcrumb">
        <li>Supplier</li>
        <li>Ubah</li>
      </ol>
    </div>
    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title">Ubah Data Supplier</h4>
                <div class="example">
                  <?php foreach ($h->result() as $row){?>
                  <form class="form-group" action="<?php echo base_url();?>supplier/update_supplier/<?php echo $row->ID_SPL;?>" method="post">
                    <!--<div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="id_spl"
                        value="<?php echo $row->ID_SPL;?>" autocomplete="off" />
                    </div>-->
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_spl"
                        value="<?php echo $row->NAMA_SPL;?>" autocomplete="off" />
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Perusahaan</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="perusahaan_spl"
                        value="<?php echo $row->PERUSAHAAN_SPL;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Telp</label>
                      <input type="text" class="form-control" id="inputBasicPassword" name="notlp_spl"
                      value="<?php echo $row->NOTLP_SPL; }?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Ubah</button>
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