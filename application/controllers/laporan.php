<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

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
        $this->load->model('laporan_model');
        $this->load->model('penjualan_model');
        $this->load->library('session');
    }

    public function laporan_penjualan_perhari()
    {
        $data['h'] = $this->penjualan_model->lihat_penjualan();
        $this->load->view('pemilik/header')->view('pemilik/laporan/laporan data transaksi penjualan barang per hari',$data)->view('pemilik/footer');
    }

    public function laporan_pembelian_perhari()
    {
         $this->load->view('pemilik/header')->view('pemilik/laporan/laporan data transaksi pembelian barang per hari')->view('pemilik/footer');
    }

    public function laporan_penjualan_perbulan()
    {
         $this->load->view('pemilik/header')->view('pemilik/laporan/laporan data transaksi penjualan barang per bulan')->view('pemilik/footer');
    }

    public function laporan_pembelian_perbulan()
    {
         $this->load->view('pemilik/header')->view('pemilik/laporan/laporan data transaksi pembelian barang per bulan')->view('pemilik/footer');
    }

   public function keuntungan_perhari()
    {
         $this->load->view('pemilik/header')->view('pemilik/laporan/laporan total keuntungan penjualan barang per hari')->view('pemilik/footer');
    }

    public function keuntungan_perbulan()
    {
         $this->load->view('pemilik/header')->view('pemilik/laporan/laporan total keuntungan penjualan barang per bulan')->view('pemilik/footer');
    }

    public function ketersediaan_barang()
    {
         $data['h'] = $this->laporan_model->lihat_ketersediaanbarang();
         $this->load->view('pemilik/header')->view('pemilik/laporan/laporan ketersediaan barang',$data)->view('pemilik/footer');
    }

}
?>