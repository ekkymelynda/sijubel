  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Lihat Data Barang</h1>
      <ol class="breadcrumb">
        <li>Barang</li>
        <li>Lihat</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Lihat Data Barang</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Keuntungan</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h->result() as $row){?>
              <tr>
                 <td><?php echo $row->ID_BRG;?></td>
                 <td><?php echo $row->NAMA_BRG;?></td>
                 <td><?php echo $row->JENIS_BRG;?></td>
                 <td><?php echo $row->HARGA_JUAL;?></td>
                 <td><?php echo $row->HARGA_BELI;?></td>
                 <td><?php echo $row->KEUNTUNGAN_BRG;?></td>
                 <td><?php echo $row->JUMLAH_BRG;?></td>
                 <td><?php echo $row->STATUS_BRG;?></td>
                 <td class="text-nowrap">
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Ubah">
                    <a href="<?php echo base_url(); ?>barang/form_update_barang/<?php echo $row->ID_BRG;?>"><i class="icon wb-wrench" aria-hidden="true"></i></a>
                  </button>
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Hapus">
                    <a href="<?php echo base_url(); ?>barang/halaman_delete_barang/<?php echo $row->ID_BRG;?>"><i class="icon wb-close" aria-hidden="true"></i></a>
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