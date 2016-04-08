<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
            redirect(base_url()."barang/barang_lihat_pemilik"); 
                    

            		//masuk ke file model
                    //$this->barang_model->inbarang($id_brg,$nama_brg,$jenis_brg,$harga_beli,$harga_jual,$status_brg);
                    //$this->load->view('pemilik/header')->view('pemilik/barang/buat')->view('pemilik/footer');          
            
		            
    		//setelah insert masuk ke halaman ini:
            redirect(base_url()."barang/barang_lihat_pemilik"); 
        }

        public function barang_lihat_pegawai()
	{
		$data['h'] = $this->barang_model->lihat_barang();
		$this->load->view('pegawai/header')->view('pegawai/barang/lihat', $data)->view('pegawai/footer');
	}

     public function barang_lihat_pemilik()
    {
        $data['h'] = $this->barang_model->lihat_barang();
        $this->load->view('pemilik/header')->view('pemilik/barang/lihat')->view('pemilik/footer');
    }

    public function update_barang()
        {
            
        }

    public function delete_barang()
        {
            
        }  
    
}
?>