<!-- Menu -->
<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">PEGAWAI</li>
            <li class="site-menu-item has-sub active open">
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
                <li class="site-menu-item active">
                  <a class="animsition-link" href="<?php echo base_url(); ?>Pegawai/pembeli_hapus" data-slug="uikit-list">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Hapus</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="advanced">
                <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                <span class="site-menu-title">Transaksi Pejualan</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
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
                <li class="site-menu-item">
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
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Hapus Data Pembeli</h1>
      <ol class="breadcrumb">
        <li>Pembeli</li>
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
                <h4 class="example-title">Hapus Data Pembeli</h4>
                <div class="example">
                  <?php foreach ($h->result() as $row){?>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <br>
                        <label><?php echo $row->ID_PMB;?></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama</label>
                        <br>
                        <label><?php echo $row->NAMA_PMB;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Alamat</label>
                      <br>
                      <label><?php echo $row->ALAMAT_PMB;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Telp</label>
                      <br>
                      <label><?php echo $row->NOTLP_PMB;?></label>
                    </div>
                    </form>
                    <div class="form-group">
                      <label>Apakah Anda yakin ingin menghapus data tersebut?</label>
                      <br>
                    </div>
                    <div class="form-group">
                      <form method="post" class="form-group" action="<?php echo base_url(); ?>pembeli/delete_pembeli/<?php echo $row->ID_PMB; }?>">
                        <button type="submit" class="btn btn-danger">Ya</button>
                      </form>
                      <form method="get" action="<?php echo base_url(); ?>pembeli/pembeli_lihat">
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