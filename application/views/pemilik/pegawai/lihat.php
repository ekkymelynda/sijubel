  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Lihat Data Pegawai</h1>
      <ol class="breadcrumb">
        <li>Pegawai</li>
        <li>Lihat</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Lihat Data Pegawai</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h->result() as $row){?>
              <tr>
                 <td><?php echo $row->ID_PGW;?></td>
                 <td><?php echo $row->NAMA_PGW;?></td>
                 <td><?php echo $row->PSWD_PGW;?></td>
                 <td><?php echo $row->ALAMAT_PGW;?></td>
                 <td><?php echo $row->NOTLP_PGW;?></td>
                 <td class="text-nowrap">
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Ubah">
                    <a href="<?php echo base_url(); ?>pegawai/form_update_pegawai/<?php echo $row->ID_PGW;?>"><i class="icon wb-wrench" aria-hidden="true"></i></a>
                  </button>
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Hapus">
                    <a href="<?php echo base_url(); ?>pegawai/halaman_delete_pegawai/<?php echo $row->ID_PGW;?>"><i class="icon wb-close" aria-hidden="true"></i></a>
                  </button>
                </td>
            </tr>
        <?php }?>
              
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>
  <!-- End Page -->