  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Data Barang</h1>
      <ol class="breadcrumb">
        <li>Barang</li>
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
                <h4 class="example-title">Ubah Data Barang</h4>
                <div class="example">
                  <?php foreach ($h->result() as $row){?>
                  <form class="form-group" action="<?php echo base_url();?>barang/update_barang/<?php echo $row->ID_BRG;?>" method="post">
                    <!--<div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                        placeholder="A0000" autocomplete="off" />
                    </div>-->
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama Barang</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_brg"
                        value="<?php echo $row->NAMA_BRG;?>" autocomplete="off" />
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Jenis Barang</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="jenis_brg"
                        value="<?php echo $row->JENIS_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Harga Jual Barang</label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="harga_jual"
                      value="<?php echo $row->HARGA_JUAL;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Harga Beli Barang</label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="harga_beli"
                      value="<?php echo $row->HARGA_BELI;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Status</label>
                      <input type="text" class="form-control" id="inputBasicPassword" name="status_brg"
                      value="<?php echo $row->STATUS_BRG; }?>" autocomplete="off" />
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