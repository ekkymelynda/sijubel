<?php

class laporan_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    public function loginpegawai($id_pgw, $pswd_pgw)
    {
        /*$query=$this->db->query("SELECT COUNT(id_pgw) FROM pegawai WHERE id_pgw='$id_pgw' AND pswd_pgw='$pswd_pgw'; ");
        
        return $query->result();*/

        $query=$this->db->query("SELECT * FROM `pegawai` WHERE id_pgw='$id_pgw' and pswd_pgw='$pswd_pgw'");
        //$query=$this->db->query("CALL sp_login('$username','$pass')");
        return $query->result();
    }
}
?>    