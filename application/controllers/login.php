<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
     

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
    }
      

    public function login_pegawai()
    {
        $this->load->view('pegawai/login');
    }


    public function login_pemilik()
    {
        $this->load->view('pemilik/login');
    }

    public function pegawai_login()
    {
        $id_pgw=$this->input->post('id_pgw');
        $pswd_pgw=$this->input->post('pswd_pgw');

        if($id_pgw == 'id_pgw' && $pswd_pgw == 'pswd_pgw')
        {
            $this->session->set_userdata('id_pgw', $id_pgw);
            redirect(base_url()."barang/barang_lihat_pegawai");
        }  
        else
        {
             $this->load->view('pegawai/login');
        }
        
    }

    public function pemilik_login()
    {
        $id_pml=$this->input->post('id_pml');
        $pswd_pml=$this->input->post('pswd_pml');

        if($id_pml == 'id_pml' && $id_pml == 'id_pml')
        {
            $this->session->set_userdata('id_pml', $id_pml);
            redirect(base_url()."barang/barang_lihat");
        }  
        else
        {
             $this->load->view('pemilik/login');
        }
        
    }


    
}
?>