<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {

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
     

    function __construct() {
        parent::__construct();
        $this->load->model('barang_model');
       }
    
    public function barang_buat()
    {
        $this->load->view('pemilik/header')->view('pemilik/barang/buat')->view('pemilik/footer');
    }
    
    public function insert_barang()
        {
            //if(!empty($_POST['id_pmb']))
              //  {
                    $id_brg=$this->input->post('id_brg');
                    $nama_brg= $this->input->post('nama_brg');
                    $jenis_brg= $this->input->post('jenis_brg');
                    $harga_beli= $this->input->post('harga_beli');
                    $harga_jual= $this->input->post('harga_jual');
                    $status_brg= $this->input->post('status_brg');
                    //masuk ke file model
                    $this->barang_model->inbarang($id_brg,$nama_brg,$jenis_brg,$harga_beli,$harga_jual,$status_brg);       
                    
                //}
            //setelah insert masuk ke halaman ini:
            redirect(base_url()."barang/barang_lihat"); 
        }

        public function barang_lihat()
    {
        $data['h'] = $this->barang_model->lihat_barang();
        $this->load->view('pemilik/header')->view('pemilik/barang/lihat',$data)->view('pemilik/footer');
    }

    public function update_barang()
        {
            
        }

    public function delete_barang()
        {
            
        }


    
    
}
?>