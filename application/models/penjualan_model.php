<?php

class penjualan_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
      
    function lihat_penjualan()
    {
        $query = $this->db->get('transaksi_penjualan');
        //return $query->result_array();
        return $query;
    }

    function lihat_penjualan_perhari($tgl_tpu)
    {
        $query = $this->db->query("SELECT * FROM `transaksi_penjualan` WHERE id_pgw='$id_pgw' and pswd_pgw='$pswd_pgw'");
        //return $query->result_array();
        return $query;
    }

    function form_update_penjualan($id_tpu)
    {
        $this->db->where("id_tpu",$id_tpu);
        $query = $this->db->get('transaksi_penjualan');
        return $query;
    }

    function delete_penjualan($id_tpu)
    {
        $this->db->where("id_tpu",$id_tpu);
        $this->db->delete('transaksi_penjualan');
    }

    
}
?>    