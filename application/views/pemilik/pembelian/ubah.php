  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Data Transaksi Pembelian</h1>
      <ol class="breadcrumb">
        <li>Transaksi pembelian</li>
        <li>Ubah</li>
      </ol>
    </div>
    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <?php 
                foreach ($i as $row1) {?>
              <div class="example-wrap">
                <h4 class="example-title">Ubah Transaksi Penjualan</h4>
                <div class="example">
                  <form class="form-group" action="<?php echo base_url();?>pembelian/update_transaksi_pembelian/<?php echo $row1->ID_TPE;?>" method="post">
                    <div class="form-group">
                      <label class="control-label" for="inputPassword">Waktu Transaksi Pembelian</label>
                      <input type="date" class="form-control" id="inputPassword" name="TGL_TPE"
                      required="required" value="<?php echo $row1->TGL_TPE;?>">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Id Transaksi Pembelian</label>
                      <input type="text" class="form-control" id="inputUserName" name="ID_TPE" required="required" value="<?php echo $row1->ID_TPE;?>">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Supplier</label>
                      <select class="form-control" name="ID_SPL" >
                                <option></option>
                                <?php 
                                foreach ($sup as $row4) {
                                if ($row4->ID_SPL==$row1->ID_SPL)
                                  {?>
                                <option selected><?php echo $row4->ID_SPL;?></option>
                                <?php } else ?>
                                <option><?php echo $row4->ID_SPL;?></option>
                                <?php } ?>
                      </select>  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputPassword">Id Pemilik</label>
                        <select class="form-control" name="ID_PML" >
                                <option></option> 
                                <?php 
                                foreach ($pml as $row2) {
                                  if ($row2->ID_PML==$row1->ID_PML) {?>
                                <option selected><?php echo $row2->ID_PML;?></option>
                                <?php } else ?> 
                                <option><?php echo $row2->ID_PML;?></option>
                                <?php } }?>
                      </select>
                    </div>
                    <!-- <div class="form-group">
                      <label class="control-label" for="inputUserName">Total Belanja</label>
                      <input type="text" class="form-control" id="inputUserName" name="TOTAL_TPU" required="required" placeholder="<?php echo $row1->TOTAL_TPU;?>">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Pembayaran</label>
                      <input type="text" class="form-control" id="inputUserName" name="BAYAR_TPU" required="required" placeholder="<?php echo $row1->BAYAR_TPU;?>">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Kembalian</label>
                      <input type="text" class="form-control" id="inputUserName" name="KEMBALIAN_TPU" required="required" placeholder="<?php echo $row1->KEMBALIAN_TPU;?>">
                    </div> -->
                      <!-- list barang restock-->
                    <?php 
                      $banyak=0;
                      foreach ($j as $row3) { 
                        $banyak++; 
                        ?>
                       <div class="form-group">
                            <div class="row row-lg">
                            <div class="col-sm-6">
                              <label class="control-label" for="inputPassword">Barang</label>
                              <select class="form-control" name=<?php echo '"nama_brg'.$banyak.'"';?>>
                                <option></option>
                                <?php 
                                foreach ($h as $row) {
                                  if($row->ID_BRG==$row3->ID_BRG) {?>
                                    <option selected><?php echo $row->NAMA_BRG;?></option>
                                  <?php } else ?>
                                  <option><?php echo $row->NAMA_BRG;?></option>
                                  <?php } ?>
                              </select> 
                            </div>
                            <div class="col-sm-6">
                              <label class="control-label" for="inputPassword">Jumlah</label>
                              <input type="text" class="form-control" id="inputPassword" name=<?php echo '"Jumlah'.$banyak.'"';?> value=<?php echo '"'.$row3->BANYAK_MASOK.'"';?>>  
                            </div>
                            </div>
                      </div> 
                      <?php } ?>
                      <?php for($k=$banyak+1; $k<11; $k++) { ?>
                      <div class="form-group">
                            <div class="row row-lg">
                            <div class="col-sm-6">
                              <label class="control-label" for="inputPassword">Barang</label>
                              <select class="form-control" name="<?php echo 'nama_brg'.$k;?>" >
                                <option></option>
                                <?php 
                                foreach ($h as $row) {?>
                                <option><?php echo $row->NAMA_BRG;?></option>
                                <?php } ?>
                              </select> 
                            </div>
                            <div class="col-sm-6">
                              <label class="control-label" for="inputPassword">Jumlah</label>
                              <input type="text" class="form-control" id="inputPassword" name="<?php echo 'Jumlah'.$k;?>" >  
                            </div>
                            </div>
                    </div>
                      <?php } ?>
                   
                      <button type="submit" class="btn btn-primary">Ubah</button>
                    
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