  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Hapus Data Transaksi Pembelian</h1>
      <ol class="breadcrumb">
        <li>Transaksi Pembelian</li>
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
                <h4 class="example-title">Hapus Data Transaksi Pembelian</h4>
                <div class="example">
                  <?php foreach ($h->result() as $row){?>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID Transaksi Pembelian</label>
                        <br>
                        <label><?php echo $row->ID_TPE;?></label>
                    </div>
                     <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID Supplier</label>
                        <br>
                        <label><?php echo $row->ID_SPL;?></label>
                    </div>
                   <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID Pemilik</label>
                        <br>
                        <label><?php echo $row->ID_PML;?></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Tanggal Transaksi Pembelian</label>
                        <br>
                        <label><?php echo $row->TGL_TPE;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Total Transaksi Pembelian</label>
                      <br>
                      <label><?php echo $row->TOTAL_TPE;?></label>
                    </div>
                    <div class="form-group">
                      <label>Apakah Anda yakin ingin menghapus data tersebut?</label>
                      <br>
                      <form method="post" class="form-group" action="<?php echo base_url(); ?>pembelian/delete_pembelian/<?php echo $row->ID_TPE; }?>">
                        <button type="submit" class="btn btn-danger">Ya</button>
                      </form>
                      <form method="get" action="<?php echo base_url(); ?>pembelian/pembelian_lihat">
                        <button type="submit" class="btn btn-success">Tidak</button>
                      </form>
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
