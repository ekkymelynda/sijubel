<?php

class pegawai_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
	
    function buat_pegawai($id_pmb,$nama_pmb,$alamat_pmb,$notlp_pmb)
    {
        $data = array(
            'id_pgw' => $id_pgw,
            'pswd_pgw' => $pswd_pgw,
            'nama_pgw' => $pswd_pgw,
            'alamat_pgw'=> $alamat_pgw,
            'notlp_pgw'=> $notlp_pgw
            );
        $this->db->insert('pegawai', $data);
    }
    
}
?>