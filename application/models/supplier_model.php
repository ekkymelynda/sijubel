<?php

class supplier_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
	
    function insupplier($id_spl,$nama_spl,$perusahaan_spl,$notlp_spl)
    {
        $data = array(
            'id_spl' => $id_spl,
            'nama_spl' => $nama_spl,
            'perusahaan_spl' => $perusahaan_spl,
            'notlp_spl'=> $notlp_spl
            );
        $this->db->insert('supplier', $data);
        //return $this->db->query("insert into pembeli(id_pmb,nama_pmb,alamat_pmb,notlp_pmb)values(now(),'$id_pmb','$nama_pmb','$alamat_pmb','$notlp_pmb')");
    }
    
    function lihat_supplier()
    {
        $query = $this->db->get('supplier');
        //return $query->result_array();
        return $query;
    }

    function update_supplier($id_pmb,$nama_pmb,$alamat_pmb,$notlp_pmb)
    {

    }

    function delete_supplier($id)
    {
        
    }
}
    ?>