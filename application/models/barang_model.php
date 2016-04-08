<?php

class barang_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function inbarang($id_brg,$nama_brg,$jenis_brg,$harga_beli,$harga_jual,$status_brg)
    {
        $data = array(
            'id_brg' => $id_brg,
            'nama_brg' => $nama_brg,
            'jenis_brg' => $jenis_brg,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'status_brg'=> $status_brg
            );
        $this->db->insert('barang', $data);
        //return $this->db->query("insert into pembeli(id_pmb,nama_pmb,alamat_pmb,notlp_pmb)values(now(),'$id_pmb','$nama_pmb','$alamat_pmb','$notlp_pmb')");
    }
    
    function lihat_barang()
    {
        $query = $this->db->get('barang');
        //return $query->result_array();
        return $query;
    }

    function update_barang($id_pmb,$nama_pmb,$alamat_pmb,$notlp_pmb)
    {

    }

    function delete_barang($id)
    {
        
    }
}
    ?>