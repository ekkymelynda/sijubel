  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Lihat Data Transaksi Pembelian</h1>
      <ol class="breadcrumb">
        <li>Transaksi Pembelian</li>
        <li>Lihat</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Lihat Data Transaksi Pembelian</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>ID Transaksi Pembelian</th>
                <th>ID Supplier</th>
                <th>ID Pemilik</th>
                <th>Tanggal Transaksi Pembelian</th>
                <th>Total Transaksi Pembelian</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h->result() as $row){?>
              <tr>
                 <td><?php echo $row->ID_TPE;?></td>
                 <td><?php echo $row->ID_PML;?></td>
                 <td><?php echo $row->ID_SPL;?></td>
                 <td><?php echo $row->TGL_TPE;?></td>
                 <td><?php echo $row->TOTAL_TPE;?></td>
                 <td class="text-nowrap">
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Ubah">
                    <a href="<?php echo base_url(); ?>pembelian/form_update_TPE/<?php echo $row->ID_TPE;?>"><i class="icon wb-wrench" aria-hidden="true"></i></a>
                  </button>
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Hapus">
                    <a href="<?php echo base_url(); ?>pembelian/halaman_delete_pembelian/<?php echo $row->ID_TPE;?>"><i class="icon wb-close" aria-hidden="true"></i></a>
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

