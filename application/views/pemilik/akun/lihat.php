  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Lihat Akun Admin</h1>
      <ol class="breadcrumb">
        <li>Akun Admin</li>
        <li>Lihat</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Lihat Akun Admin</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>ID </th>
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
                 <td><?php echo $row->ID_PML;?></td>
                 <td><?php echo $row->NAMA_PML;?></td>
                 <td><?php echo $row->PSWD_PML;?></td>
                 <td><?php echo $row->ALAMAT_PML;?></td>
                 <td><?php echo $row->NOTLP_PML;?></td>
                 <td class="text-nowrap">
                  <button type="submit" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Ubah">
                    <a href="<?php echo base_url(); ?>pemilik/form_update_pemilik/<?php echo $row->ID_PML;?>"><i class="icon wb-wrench" aria-hidden="true"></i></a>
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
