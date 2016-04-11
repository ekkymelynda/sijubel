  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Buat Data Supplier</h1>
      <ol class="breadcrumb">
        <li>Supplier</li>
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
                <h4 class="example-title">Buat Data Supplier</h4>
                <div class="example">
                  <form autocomplete="off" action="<?php echo base_url();?>supplier/insert_supplier" method="post">
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="id_spl"
                        placeholder="A0000" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_spl"
                        placeholder="Ekky Melynda" autocomplete="off" />
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Perusahaan</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="perusahaan_spl"
                        placeholder="PT. Maju Jaya Makmur" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Telp</label>
                      <input type="text" class="form-control" id="inputBasicPassword" name="notlp_spl"
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