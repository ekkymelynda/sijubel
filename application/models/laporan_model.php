<?php

class laporan_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    public function penjualan_perbulan($tahun,$bulan)
    {
        $query=$this->db->query("SELECT * FROM transaksi_penjualan WHERE MONTH(tgl_tpu) = '$bulan' AND YEAR(tgl_tpu) = '$tahun';");
        return $query->result();
    }

    public function penjualan_perhari($tgl_tpu)
    {
        $query=$this->db->query("SELECT * FROM transaksi_penjualan WHERE tgl_tpu = '$tgl_tpu';");
        return $query->result();
    }

    public function pembelian_perbulan($tahun,$bulan)
    {
        $query=$this->db->query("SELECT * FROM transaksi_pembelian WHERE MONTH(tgl_tpe) = '$bulan' AND YEAR(tgl_tpe) = '$tahun';");
        return $query->result();
    }

    public function pembelian_perhari($tgl_tpe)
    {
        $query=$this->db->query("SELECT * FROM transaksi_pembelian WHERE tgl_tpe = '$tgl_tpe';");
        return $query->result();
    }

    public function keuntungan_perbulan($tahun,$bulan)
    {
        $query=$this->db->query("SELECT * FROM transaksi_pembelian WHERE MONTH(tgl_tpe) = '$bulan' AND YEAR(tgl_tpe) = '$tahun';");
        return $query->result();
    }

    public function keuntungan_perhari($tgl_tpu)
    {
        $query=$this->db->query("SELECT * FROM transaksi_pembelian WHERE tgl_tpe = '$tgl_tpe';");
        return $query1->result();
    }

    public function lihat_ketersediaanbarang()
    {
        $query=$this->db->query("SELECT NAMA_BRG, JENIS_BRG, JUMLAH_BRG FROM `barang`");
        return $query->result();
    }

}
?>    