  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Data Transaksi Pembelian</h1>
      <ol class="breadcrumb">
        <li>Transaksi pembelian</li>
        <li>Ubah</li>
      </ol>
    </div>
    <div class="page-content container-fluid">
      <div class="row">
        <div>
          <!-- Panel Wizard Form -->
          <div class="panel" id="exampleWizardForm">
            <div class="panel-heading">
              <h3 class="panel-title">Transaksi Pembelian</h3>
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
                    <p>Masukkan List Barang yang Dibeli</p>
                  </div>
                </div>

                <div class="step col-md-4" data-target="#exampleGetting" role="tab">
                  <span class="step-number">3</span>
                  <div class="step-desc">
                    <span class="step-title">Total</span>
                    <p>Total Pembelian</p>
                  </div>
                </div>
              </div>
              <!-- End Steps -->

              <!-- Wizard Content -->
              <div class="wizard-content">
                <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                  <form id="exampleAccountForm">
                    <div class="form-group">
                      <label class="control-label" for="inputPassword">Waktu Transaksi Pembelian</label>
                      <input type="date_time" class="form-control" id="inputPassword" name="password"
                      required="required">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Id Transaksi Pembelian</label>
                      <input type="text" class="form-control" id="inputUserName" name="IdTransaksiPembelian" required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Supplier</label>
                      <input type="text" class="form-control" id="inputPassword" name="IdSupplier"
                      required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputPassword">Id Admin</label>
                      <input type="text" class="form-control" id="inputPassword" name="IdAdmin"
                      required="required">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleBilling" role="tabpanel">
                  <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Id Barang</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="IdBarang" placeholder="Id Barang" required="required">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputCVV">Nama Barang</label>
                      <input type="text" class="form-control" id="inputCVV" name="NamaBarang" placeholder="Nama Barang" required="required">
                    </div>
                      <div class="form-group">
                      <label class="control-label" for="inputCVV">Harga Beli Barang</label>
                      <input type="text" class="form-control" id="inputCVV" name="HargaBeliBarang" placeholder="Harga Beli Barang" required="required">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleGetting" role="tabpanel">
                  <div class="text-center margin-vertical-20">
                    <h4>Total Pembelian : </h4> <!--  -->
                  </div>
                    <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Bayar Transaksi</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number">
                    </div>
                    </form>
                    <div class="text-center margin-vertical-20">
                    <h4>Total Kembalian : </h4> <!-- -->
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