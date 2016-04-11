  <!-- Page -->
  <div class="page anim">
    <div class="page-header">
      <h1 class="page-title">Buat Data Transaksi Penjualan</h1>
      <ol class="breadcrumb">
        <li>Transaksi Penjualan</li>
        <li>Buat</li>
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
                      <input type="datetime" class="form-control" id="inputPassword" name="password"
                      required="required">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Id Transaksi Penjualan</label>
                      <input type="text" class="form-control" id="inputUserName" name="IDTransaksiPenjualan" required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Pembeli</label>
                      <input type="text" class="form-control" id="inputPassword" name="IDPembeli"
                      required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Pegawai</label>
                      <input type="text" class="form-control" id="inputPassword" name="IDPegawai"
                      required="required">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleBilling" role="tabpanel">
                  <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Id Barang</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="IdBarang" placeholder="Card number">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputCVV">Nama Barang</label>
                      <input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="NamaBarang">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputCVV">Harga Jual Barang</label>
                      <input type="text" class="form-control" id="inputCVV" name="HargaJualBarang" placeholder="CVV">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleGetting" role="tabpanel">
                  <div class="text-center margin-vertical-20">
                    <h4>Total Penjualan : </h4>
                  </div>
                    <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Bayar Transaksi Penjualan</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number">
                    </div>
                    </form>
                    <div class="text-center margin-vertical-20">
                    <h4>Total Kembalian : </h4> 
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

  