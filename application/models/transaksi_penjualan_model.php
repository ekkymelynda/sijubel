<?php

class transaksi_penjualan extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }

    function intransaksi_penjualan($id_pmb,$nama_pmb,$alamat_pmb,$notlp_pmb)
    {
        $data = array(
            'id_pmb' => $id_pmb,
            'nama_pmb' => $nama_pmb,
            'alamat_pmb' => $alamat_pmb,
            'notlp_pmb'=> $notlp_pmb
            );
        $this->db->insert('transaksi_penjualan', $data);
        //return $this->db->query("insert into pembeli(id_pmb,nama_pmb,alamat_pmb,notlp_pmb)values(now(),'$id_pmb','$nama_pmb','$alamat_pmb','$notlp_pmb')");
    }
    
    function lihat_transaksi_penjualan()
    {
        $query = $this->db->get('transaksi_penjualan');
        //return $query->result_array();
        return $query;
    }

    function form_update_transaksi_penjualan($id_pmb)
    {
        $this->db->where("id_pmb",$id_pmb);
        $query = $this->db->get('transaksi_penjualan');
        return $query;

    }

    function update_transaksi_penjualan($id_pmb,$nama_pmb,$alamat_pmb,$notlp_pmb)
    {
        $data = array(
            'nama_pmb' => $nama_pmb,
            'alamat_pmb' => $alamat_pmb,
            'notlp_pmb'=> $notlp_pmb
            );

        $this->db->where("id_pmb",$id_pmb);
        $this->db->update('transaksi_penjualan', $data);
    }

    function delete_transaksi_penjualan($id_pmb)
    {
        $this->db->where("id_pmb",$id_pmb);
        $this->db->delete('transaksi_penjualan');
    }

    ?>