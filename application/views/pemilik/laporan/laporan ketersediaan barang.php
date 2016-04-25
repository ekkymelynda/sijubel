  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Laporan Ketersediaan Barang</h1>
      <ol class="breadcrumb">
        <li>Laporan</li>
        <li>Ketersediaan Barang</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Laporan Ketersediaan Barang</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h as $row){?>
              <tr>
                 <td><?php echo $row->NAMA_BRG;?></td>
                 <td><?php echo $row->JENIS_BRG;?></td>
                 <td><?php echo $row->JUMLAH_BRG;?></td>
                <?php }?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <!-- End Panel Basic -->
    </div>
  </div>
  <!-- End Page -->