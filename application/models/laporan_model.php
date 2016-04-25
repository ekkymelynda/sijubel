<?php

class laporan_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    public function loginpegawai($id_pgw, $pswd_pgw)
    {
        /*$query=$this->db->query("SELECT COUNT(id_pgw) FROM pegawai WHERE id_pgw='$id_pgw' AND pswd_pgw='$pswd_pgw'; ");
        
        return $query->result();*/

        $query=$this->db->query("SELECT * FROM `pegawai` WHERE id_pgw='$id_pgw' and pswd_pgw='$pswd_pgw'");
        //$query=$this->db->query("CALL sp_login('$username','$pass')");
        return $query->result();
    }

    public function lihat_ketersediaanbarang()
    {
        $query=$this->db->query("SELECT NAMA_BRG, JENIS_BRG, COUNT(NAMA_BRG) as JUMLAH_BRG FROM `barang` WHERE status_brg='tersedia' GROUP BY NAMA_BRG");
        return $query->result();
    }

    public function lihat_laporanpenjualanperbulan()
    {
        $query = $this->db->query("SELECT * from `transaksi_penjualan`");
        //return $query->result_array();
        return $query->result();
    }

}
?>    