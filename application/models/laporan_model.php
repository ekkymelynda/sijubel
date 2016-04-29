<?php

class laporan_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    public function penjualan_perbulan($tahun, $bulan)
    {
        $query=$this->db->query("SELECT j.`ID_TPU`, j.`ID_PGW`, j.`ID_PMB`, j.`TGL_TPU`, j.`TOTAL_TPU`, j.`BAYAR_TPU`, j.`KEMBALIAN_TPU`, 
            MONTH(j.`TGL_TPU`) AS bulan, YEAR(j.`TGL_TPU`) AS tahun 
            FROM `transaksi_penjualan` j 
            WHERE MONTH(j.`TGL_TPU`) = '$bulan' AND YEAR(j.`TGL_TPU`) = '$tahun';");
        return $query->result();
    }

    public function total_penjualan_perbulan($tahun, $bulan)
    {
        $query=$this->db->query("SELECT SUM(j.`TOTAL_TPU`) AS total, MONTH(j.`TGL_TPU`) AS bulan, YEAR(j.`TGL_TPU`) AS tahun
            FROM `transaksi_penjualan` j
            WHERE MONTH(j.`TGL_TPU`) = '$bulan' AND YEAR(j.`TGL_TPU`) = '$tahun';");
        return $query->result();
    }

    public function penjualan_perhari($tgl_tpu)
    {
        $query=$this->db->query("SELECT * FROM transaksi_penjualan WHERE tgl_tpu = '$tgl_tpu';");
        return $query->result();
    }

    public function pembelian_perbulan($tahun, $bulan)
    {
        $query=$this->db->query("SELECT * FROM transaksi_pembelian WHERE MONTH(tgl_tpe) = '$bulan' AND YEAR(tgl_tpe) = '$tahun';");
        return $query->result();
    }

    public function pembelian_perhari($tgl_tpe)
    {
        $query=$this->db->query("SELECT * FROM transaksi_pembelian WHERE tgl_tpe = '$tgl_tpe';");
        return $query->result();
    }

    public function keuntungan_perbulan($tahun, $bulan)
    {
        $query=$this->db->query("SELECT SUM(b.`KEUNTUNGAN_BRG` * m.`BANYAK_BELI`) AS total,
            MONTH(j.`TGL_TPU`) AS bulan, YEAR(j.`TGL_TPU`) AS tahun
            FROM `transaksi_penjualan` j, `membeli` m, barang b
            WHERE MONTH(j.`TGL_TPU`) = '$bulan' 
            AND YEAR(j.`TGL_TPU`) = '2016'
            AND j.`ID_TPU` = m.`ID_TPU`
            AND m.`ID_BRG` = b.`ID_BRG`;");
        return $query->result();
    }

    public function keuntungan_perhari($tgl_tpu)
    {
        $query=$this->db->query("SELECT SUM(b.`KEUNTUNGAN_BRG` * m.`BANYAK_BELI`) AS total, j.`TGL_TPU`
            FROM `transaksi_penjualan` j, `membeli` m, barang b
            WHERE j.`TGL_TPU` = '$tgl_tpu'
            AND j.`ID_TPU` = m.`ID_TPU`
            AND m.`ID_BRG` = b.`ID_BRG`;");
        return $query->result();
    }

    public function lihat_ketersediaanbarang()
    {
        $query=$this->db->query("SELECT NAMA_BRG, JENIS_BRG, JUMLAH_BRG FROM `barang`");
        return $query->result();
    }

}
?>    