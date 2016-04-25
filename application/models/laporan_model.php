<?php

class laporan_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    public function penjualan_perhari($tgl_tpu)
    {
        $query=$this->db->query("SELECT * FROM transaksi_penjualan WHERE DAY(tgl_tpu) = '$tgl_tpu' AND MONTH(tgl_tpu) = '$tgl_tpu' AND YEAR(tgl_tpu) = '$tgl_tpu';");
        return $query->result();
    }
}
?>    