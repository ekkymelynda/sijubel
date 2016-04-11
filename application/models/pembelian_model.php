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

    
}
?>    