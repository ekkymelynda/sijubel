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

        $cek = $this->login_model->loginbetul($id_pgw,$pswd_pgw);
        echo "$cek";
        
    }


    
}
?>