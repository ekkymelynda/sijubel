SELECT * FROM `pegawai` WHERE id_pgw='A0001';

SELECT COUNT(id_pgw) FROM pegawai WHERE id_pgw='A0001' AND pswd_pgw='12345nurul'; 

SELECT CURDATE();

SELECT * FROM transaksi_penjualan WHERE DAY(tgl_tpu) = '18' AND MONTH(tgl_tpu) = '4' AND YEAR(tgl_tpu) = '2016';

SELECT DAY(tgl_tpu) FROM transaksi_penjualan WHERE DAY(tgl_tpu) = '11';

SELECT MONTH(tgl_tpu) FROM transaksi_penjualan WHERE MONTH(tgl_tpu) = '4';

SELECT YEAR(tgl_tpu) FROM transaksi_penjualan WHERE YEAR(tgl_tpu) = '2016';

SELECT SUM(total_tpu) FROM transaksi_penjualan WHERE DAY(tgl_tpu) = '11' AND MONTH(tgl_tpu) = '4' AND YEAR(tgl_tpu) = '2016';

SELECT * FROM transaksi_pembelian WHERE DAY(tgl_tpe) = '18' AND MONTH(tgl_tpe) = '4' AND YEAR(tgl_tpe) = '2016';

SELECT SUM(total_tpe) FROM transaksi_pembelian WHERE DAY(tgl_tpe) = '11' AND MONTH(tgl_tpe) = '4' AND YEAR(tgl_tpe) = '2016';

SELECT * FROM transaksi_penjualan WHERE MONTH(tgl_tpu) = '4' AND YEAR(tgl_tpu) = '2016';

SELECT SUM(total_tpu) FROM transaksi_penjualan WHERE MONTH(tgl_tpu) = '4' AND YEAR(tgl_tpu) = '2016';

SELECT * FROM transaksi_pembelian WHERE MONTH(tgl_tpe) = '4' AND YEAR(tgl_tpe) = '2016';

SELECT SUM(total_tpe) FROM transaksi_pembelian WHERE MONTH(tgl_tpe) = '4' AND YEAR(tgl_tpe) = '2016';

SELECT `NAMA_BRG`,`JENIS_BRG`,`JUMLAH_BRG`  FROM barang;

SELECT `HARGA_JUAL` - `HARGA_BELI` AS keuntungan FROM barang;

SELECT FROM `transaksi_penjualan`, `membeli`, `barang` WHERE 