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
