<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {

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
		$this->load->view('pemilik/login');
	}


	public function barang_buat()
	{
		$this->load->view('pemilik/header')->view('pemilik/barang/buat')->view('pemilik/footer');
	}

	public function barang_lihat()
	{
		$this->load->view('pemilik/header')->view('pemilik/barang/lihat')->view('pemilik/footer');
	}

	public function barang_ubah()
	{
		$this->load->view('pemilik/header')->view('pemilik/barang/ubah')->view('pemilik/footer');
	}

	public function barang_hapus()
	{
		$this->load->view('pemilik/header')->view('pemilik/barang/hapus')->view('pemilik/footer');
	}


	public function akun_lihat()
	{
		$this->load->view('pemilik/header')->view('pemilik/akun/lihat')->view('pemilik/footer');
	}

	public function akun_ubah()
	{
		$this->load->view('pemilik/header')->view('pemilik/akun/ubah')->view('pemilik/footer');
	}


	public function pegawai_buat()
	{
		$this->load->view('pemilik/header')->view('pemilik/pegawai/buat')->view('pemilik/footer');
	}

	public function pegawai_lihat()
	{
		$this->load->view('pemilik/header')->view('pemilik/pegawai/lihat')->view('pemilik/footer');
	}

	public function pegawai_ubah()
	{
		$this->load->view('pemilik/header')->view('pemilik/pegawai/ubah')->view('pemilik/footer');
	}

	public function pegawai_hapus()
	{
		$this->load->view('pemilik/header')->view('pemilik/pegawai/hapus')->view('pemilik/footer');
	}


	public function pembelian_buat()
	{
		$this->load->view('pemilik/header')->view('pemilik/pembelian/buat')->view('pemilik/footer');
	}

	public function pembelian_lihat()
	{
		$this->load->view('pemilik/header')->view('pemilik/pembelian/lihat')->view('pemilik/footer');
	}

	public function pembelian_ubah()
	{
		$this->load->view('pemilik/header')->view('pemilik/pembelian/ubah')->view('pemilik/footer');
	}

	public function pembelian_hapus()
	{
		$this->load->view('pemilik/header')->view('pemilik/pembelian/hapus')->view('pemilik/footer');
	}


	public function supplier_buat()
	{
		$this->load->view('pemilik/header')->view('pemilik/supplier/buat')->view('pemilik/footer');
	}

	public function supplier_lihat()
	{
		$this->load->view('pemilik/header')->view('pemilik/supplier/lihat')->view('pemilik/footer');
	}

	public function supplier_ubah()
	{
		$this->load->view('pemilik/header')->view('pemilik/supplier/ubah')->view('pemilik/footer');
	}

	public function supplier_hapus()
	{
		$this->load->view('pemilik/header')->view('pemilik/supplier/hapus')->view('pemilik/footer');
	}

	public function laporan_pembelian_perbulan()
	{
		$this->load->view('pemilik/header')->view('pemilik/laporan/laporan data transaksi pembelian barang per bulan')->view('pemilik/footer');
	}

	public function laporan_pembelian_perhari()
	{
		$this->load->view('pemilik/header')->view('pemilik/laporan/laporan data transaksi pembelian barang per hari')->view('pemilik/footer');
	}

	public function laporan_penjualan_perbulan()
	{
		$this->load->view('pemilik/header')->view('pemilik/laporan/laporan data transaksi penjualan barang per bulan')->view('pemilik/footer');
	}

	public function laporan_penjualan_perhari()
	{
		$this->load->view('pemilik/header')->view('pemilik/laporan/laporan data transaksi penjualan barang per hari')->view('pemilik/footer');
	}

	public function ketersediaan_barang()
	{
		$this->load->view('pemilik/header')->view('pemilik/laporan/laporan ketersediaan barang')->view('pemilik/footer');
	}

	public function keuntungan_perbulan()
	{
		$this->load->view('pemilik/header')->view('pemilik/laporan/laporan total keuntungan penjualan barang per bulan')->view('pemilik/footer');
	}

	public function keuntungan_perhari()
	{
		$this->load->view('pemilik/header')->view('pemilik/laporan/laporan total keuntungan penjualan barang per hari')->view('pemilik/footer');
	}

}
