<?php

class login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    public function loginbetul($id_pgw, $pswd_pgw)
    {
        $query=$this->db->query("SELECT * FROM `pegawai` WHERE id_pgw='$id_pgw'");
        
        return $query->result();
    }
}
?>