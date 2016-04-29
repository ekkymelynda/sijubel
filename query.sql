SELECT * FROM `pegawai` WHERE id_pgw='A0001';

SELECT COUNT(id_pgw) FROM pegawai WHERE id_pgw='A0001' AND pswd_pgw='12345nurul'; 

SELECT CURDATE();

SELECT * FROM transaksi_penjualan WHERE DAY(tgl_tpu) = '24' AND MONTH(tgl_tpu) = '4' AND YEAR(tgl_tpu) = '2016';

SELECT tgl_tpu FROM transaksi_penjualan WHERE tgl_tpu = '2016-04-24 19:11:04';

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

SELECT * FROM `membeli` m, `barang` b WHERE M.`ID_TPU` = 'TPU01' AND M.`ID_BRG` = 'BRG01';

SELECT B.`KEUNTUNGAN_BRG` * M.`BANYAK_BELI` AS TOTAL_KEUNTUNGGAN_SATU_BARANG FROM `transaksi_penjualan` t, `membeli` m, `barang` b WHERE M.`ID_TPU` = 'TPU01' AND M.`ID_BRG` = 'BRG01' AND M.`ID_TPU` = T.`ID_TPU` AND M.`ID_BRG` = B.`ID_BRG`;

SELECT ID_BRG FROM MEMBELI WHERE MEMBELI.`ID_TPU` = 'TPU01';

SELECT * FROM MEMBELI WHERE MEMBELI.`ID_BRG` IN (SELECT ID_BRG FROM MEMBELI WHERE MEMBELI.`ID_TPU` = 'TPU01');

SELECT BARANG.`KEUNTUNGAN_BRG` FROM MEMBELI, BARANG WHERE MEMBELI.`ID_BRG` IN (SELECT ID_BRG FROM MEMBELI WHERE MEMBELI.`ID_TPU` = 'TPU01') AND MEMBELI.`ID_BRG` = BARANG.`ID_BRG`;

SELECT BARANG.`KEUNTUNGAN_BRG` * MEMBELI.`BANYAK_BELI` AS TOTAL_KEUNTUNGGAN_SATU_TRANSAKSI FROM MEMBELI, BARANG WHERE MEMBELI.`ID_BRG` IN (SELECT ID_BRG FROM MEMBELI WHERE MEMBELI.`ID_TPU` = 'TPU01') AND MEMBELI.`ID_BRG` = BARANG.`ID_BRG`;

SELECT SUM(b.`KEUNTUNGAN_BRG` * m.`BANYAK_BELI`) AS total, j.`TGL_TPU` FROM `transaksi_penjualan` j, `membeli` m, barang b WHERE j.`TGL_TPU` = '2016-04-25' AND j.`ID_TPU` = m.`ID_TPU` AND m.`ID_BRG` = b.`ID_BRG`;

SELECT * FROM `transaksi_penjualan` j, `membeli` m, barang b WHERE j.`TGL_TPU` = '2016-04-25' AND j.`ID_TPU` = m.`ID_TPU` AND m.`ID_BRG` = b.`ID_BRG`;

SELECT * FROM `transaksi_penjualan` j, `membeli` m, barang b WHERE MONTH(j.`TGL_TPU`) = '4'  AND YEAR(j.`TGL_TPU`) = '2016' AND j.`ID_TPU` = m.`ID_TPU` AND m.`ID_BRG` = b.`ID_BRG`;

SELECT SUM(b.`KEUNTUNGAN_BRG` * m.`BANYAK_BELI`) AS total, MONTH(j.`TGL_TPU`) AS bulan, YEAR(j.`TGL_TPU`) AS tahun FROM `transaksi_penjualan` j, `membeli` m, barang b WHERE MONTH(j.`TGL_TPU`) = '4'  AND YEAR(j.`TGL_TPU`) = '2016' AND j.`ID_TPU` = m.`ID_TPU` AND m.`ID_BRG` = b.`ID_BRG`;

SELECT SUM(j.`TOTAL_TPU`) AS total, MONTH(j.`TGL_TPU`) AS bulan, YEAR(j.`TGL_TPU`) AS tahun FROM `transaksi_penjualan` j WHERE MONTH(j.`TGL_TPU`) = '4' AND YEAR(j.`TGL_TPU`) = '2016';

SELECT j.`ID_TPU`, j.`ID_PGW`, j.`ID_PMB`, j.`TGL_TPU`, j.`TOTAL_TPU`, j.`BAYAR_TPU`, j.`KEMBALIAN_TPU`, MONTH(j.`TGL_TPU`) AS bulan, YEAR(j.`TGL_TPU`) AS tahun FROM `transaksi_penjualan` j WHERE MONTH(j.`TGL_TPU`) = '4' AND YEAR(j.`TGL_TPU`) = '2016';

SELECT DISTINCT MONTH(j.`TGL_TPU`) AS bulan, YEAR(j.`TGL_TPU`) AS tahun FROM `transaksi_penjualan` j WHERE MONTH(j.`TGL_TPU`) = '4' AND YEAR(j.`TGL_TPU`) = '2016';

SELECT DISTINCT MONTH(b.`TGL_TPE`) AS bulan, YEAR(b.`TGL_TPE`) AS tahun FROM `transaksi_pembelian` b WHERE MONTH(b.`TGL_TPE`) = '4' AND YEAR(b.`TGL_TPE`) = '2016';

SELECT DISTINCT b.`TGL_TPE` AS tgl FROM `transaksi_pembelian` b WHERE b.`TGL_TPE` = '2016-04-24';

SELECT DISTINCT j.`TGL_TPU` AS tgl FROM `transaksi_penjualan` j WHERE j.`TGL_TPU` = '2016-04-24';
