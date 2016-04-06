<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

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

	public function login()
	{
		$this->load->view('pegawai/login');
	}

	/**/

	public function pembeli_buat()
	{
		$this->load->view('pegawai/header')->view('pegawai/pembeli/buat')->view('pegawai/footer');
	}

	public function buat_pembeli()
	{
		$ID_PMB = $_POST['login_user'];
		$NAMA_PMB = $_POST['namadepan'];
		$ALAMAT_PMB = $_POST['namabelakang'];
		$NOTLP_PMB = $_POST['alamat'];			
	}

	/**/

	public function pembeli_lihat()
	{
		$this->load->view('pegawai/header')->view('pegawai/pembeli/lihat')->view('pegawai/footer');
	}

	public function pembeli_ubah()
	{
		$this->load->view('pegawai/header')->view('pegawai/pembeli/ubah')->view('pegawai/footer');
	}

	public function pembeli_hapus()
	{
		$this->load->view('pegawai/header')->view('pegawai/pembeli/hapus')->view('pegawai/footer');
	}


	public function penjualan_buat()
	{
		$this->load->view('pegawai/header')->view('pegawai/penjualan/buat')->view('pegawai/footer');
	}

	public function penjualan_lihat()
	{
		$this->load->view('pegawai/header')->view('pegawai/penjualan/lihat')->view('pegawai/footer');
	}

	public function penjualan_ubah()
	{
		$this->load->view('pegawai/header')->view('pegawai/penjualan/ubah')->view('pegawai/footer');
	}

	public function penjualan_hapus()
	{
		$this->load->view('pegawai/header')->view('pegawai/penjualan/hapus')->view('pegawai/footer');
	}
	

	public function barang_lihat()
	{
		$this->load->view('pegawai/header')->view('pegawai/barang/lihat')->view('pegawai/footer');
	}
}
