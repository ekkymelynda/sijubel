<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembelian extends CI_Controller {

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
        $this->load->model('pembelian_model');
       }
    
    public function pembelian_lihat()
	{
		$data['h'] = $this->pembelian_model->lihat_pembelian();
		$this->load->view('pemilik/header')->view('pemilik/pembelian/lihat',$data)->view('pemilik/footer');
	}

	public function form_update_pembelian($id_tpe)
        {
            $data['h'] = $this->pembelian_model->form_update_pembelian($id_tpe);
            $this->load->view('pemilik/header')->view('pemilik/pembelian/ubah',$data)->view('pemilik/footer');
        }

    public function halaman_delete_pembelian($id_tpe)
        {
            $data['h'] = $this->pembelian_model->form_update_pembelian($id_tpe);
            $this->load->view('pemilik/header')->view('pemilik/pembelian/hapus',$data)->view('pemilik/footer');
        }

    public function delete_pembelian($id_tpe)
        {
            $this->pembelian_model->delete_pembelian($id_tpe);
            redirect(base_url()."pembelian/pembelian_lihat");
        }
    
}
?>