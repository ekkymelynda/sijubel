<?php

class pembelian_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
      
    function lihat_pembelian()
    {
        $query = $this->db->get('transaksi_pembelian');
        //return $query->result_array();
        return $query;
    }

        function form_update_pembelian($id_tpe)
    {
        $this->db->where("id_tpe",$id_tpe);
        $query = $this->db->get('transaksi_pembelian');
        return $query;
    }

    function delete_pembelian($id_tpe)
    {
        $this->db->where("id_tpe",$id_tpe);
        $this->db->delete('transaksi_pembelian');
    }

    
}
?>    