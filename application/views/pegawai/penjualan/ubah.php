  <!-- Menu -->
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">PEGAWAI</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Pembeli</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/pembeli_buat" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Buat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/pembeli_lihat" data-slug="uikit-colors">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lihat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/pembeli_ubah" data-slug="uikit-dropdowns">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Ubah</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/pembeli_hapus" data-slug="uikit-list">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Hapus</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub active open">
              <a href="javascript:void(0)" data-slug="advanced">
                <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                <span class="site-menu-title">Transaksi Penjualan</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item ">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/penjualan_buat" data-slug="advanced-animation">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Buat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/penjualan_lihat" data-slug="advanced-lightbox">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lihat</span>
                  </a>
                </li>
                <li class="site-menu-item active">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/penjualan_ubah" data-slug="advanced-lightbox">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Ubah</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/penjualan_hapus" data-slug="advanced-treeview">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Hapus</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="structure">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Barang</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/barang_lihat" data-slug="structure-alerts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lihat</span>
                  </a>
                </li>
              </ul>
            </li>
        </div>
      </div>
    </div>
  </div>
  <!-- End Menu -->
    
  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Data Transaksi Penjualan</h1>
      <ol class="breadcrumb">
        <li>Transaksi Penjualan</li>
        <li>Ubah</li>
      </ol>
    </div>
    <div class="page-content container-fluid">
      <div class="row">
        <div>
          <!-- Panel Wizard Form -->
          <div class="panel" id="exampleWizardForm">
            <div class="panel-heading">
              <h3 class="panel-title">Transaksi Penjualan</h3>
            </div>
            <div class="panel-body">
              <!-- Steps -->
              <div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
                <div class="step col-md-4 current" data-target="#exampleAccount" role="tab">
                  <span class="step-number">1</span>
                  <div class="step-desc">
                    <span class="step-title">Kode</span>
                    <p>Masukkan Tanggal dan Kode</p>
                  </div>
                </div>

                <div class="step col-md-4" data-target="#exampleBilling" role="tab">
                  <span class="step-number">2</span>
                  <div class="step-desc">
                    <span class="step-title">List Barang</span>
                    <p>Masukkan List Barang yang Dijual</p>
                  </div>
                </div>

                <div class="step col-md-4" data-target="#exampleGetting" role="tab">
                  <span class="step-number">3</span>
                  <div class="step-desc">
                    <span class="step-title">Total</span>
                    <p>Total Penjualan</p>
                  </div>
                </div>
              </div>
              <!-- End Steps -->

              <!-- Wizard Content -->
              <div class="wizard-content">
                <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                  <form id="exampleAccountForm">
                    <div class="form-group">
                      <label class="control-label" for="inputPassword">Waktu Transaksi Penjualan</label>
                      <input type="datetime" class="form-control" id="inputPassword" name="password" placeholder="27 Maret 2016"
                      required="required">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Id Transaksi Penjualan</label>
                      <input type="text" class="form-control" id="inputUserName" name="IDtransaksipenjualan" required="required" placeholder="A0000">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Pembeli</label>
                      <input type="password" class="form-control" id="inputPassword" name="IDpembeli" placeholder="B0000"
                      required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Pegawai</label>
                      <input type="text" class="form-control" id="inputPassword" name="IDPegawai" placeholder="C0000"
                      required="required">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleBilling" role="tabpanel">
                  <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Id Barang</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="IdBarang" placeholder="D0000">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputCVV">Nama Barang</label>
                      <input type="text" class="form-control" id="inputCVV" name="NamaBarang" placeholder="pensil">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputCVV">Harga Jual Barang</label>
                      <input type="text" class="form-control" id="inputCVV" name="HargaJualBarang" placeholder="3000">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleGetting" role="tabpanel">
                  <div class="text-center margin-vertical-20">
                    <h4>Total Penjualan : </h4> <!--  diisi hasil jumlah total penjualan -->
                  </div>
                    <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Bayar Transaksi Penjualan</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="5000">
                    </div>
                    </form>
                    <div class="text-center margin-vertical-20">
                    <h4>Total Kembalian : </h4> <!-- diisi hasil Bayar Transaksi - total pembelian -->
                  </div>
                </div>
              </div>
              <!-- End Wizard Content -->

            </div>
          </div>
          <!-- End Panel Wizard One Form -->
        </div>

        
      </div>

    </div>
  </div>
  <!-- End Page -->
