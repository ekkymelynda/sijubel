SELECT * FROM `pegawai` WHERE id_pgw='A0001';

SELECT COUNT(id_pgw) FROM pegawai WHERE id_pgw='A0001' AND pswd_pgw='12345nurul'; 

SELECT * FROM transaksi_penjualan WHERE tgl_pgw LIKE '19';
