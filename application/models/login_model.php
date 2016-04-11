<?php

class login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    public function loginpegawai($id_pgw, $pswd_pgw)
    {
        $query=$this->db->query("SELECT COUNT(id_pgw) FROM pegawai WHERE id_pgw='$id_pgw' AND pswd_pgw='$pswd_pgw'; ");
        
        return $query->result();
    }

    public function loginpemilik($id_pml, $pswd_pml)
    {
        $query=$this->db->query("SELECT COUNT(id_pml) FROM pegawai WHERE id_pml='$id_pml' AND pswd_pml='$pswd_pml'; ");
        
        return $query->result();
    }
}
?>