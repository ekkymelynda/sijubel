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

SELECT COUNT(nama_brg) FROM barang WHERE nama_brg = 'Pensil 2B';

SELECT nama_brg FROM barang;

SELECT nama_brg, jenis_brg, COUNT(nama_brg) AS jumlah FROM barang WHERE nama_brg IN (SELECT nama_brg FROM barang);

SELECT FROM transaksi_penjualan jual, transaksi_pembelian beli WHERE 

