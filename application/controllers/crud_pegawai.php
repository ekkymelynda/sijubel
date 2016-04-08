<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_pegawai extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('');
		$this->load->library('');
		$this->load->model('pegawai_model');
	}

	public function index()
	{
		$this->load->view('');
	}

	public function create()
	{
		$id_pgw = $_POST['id_pgw'];
		$pswd_pgw = $_POST['pswd_pgw'];
		$nama_pgw = $_POST['nama_pgw'];
		$alamat_pgw = $_POST['alamat_pgw'];
		$notlp_pgw = $_POST['notlp_pgw'];
		$this->pegawai_model->buat_pegawai($buat_pegawai, $pswd_pgw, $nama_pgw, $alamat_pgw, $notlp_pgw);
		redirect('');
	}


}