<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_penjualan extends CI_Controller {

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
     

    // function __construct() {
    //     parent::__construct();
    //     $this->load->model('transaksi_penjualan_model');
    //    }
    
    public function transaksi_penjualan_buat()
    {
        // $this->load->view('pegawai/header')->view('pegawai/penjualan/buat')->view('pegawai/footer');
        $this->load->view('pegawai/penjualan/buat1');
    }
    
    // public function insert_transaksi_penjualan()
    //     {
    //         //if(!empty($_POST['id_pmb']))
    //           //  {
    //                 $id_pmb=$this->input->post('id_pmb');
    //                 $nama_pmb= $this->input->post('nama_pmb');
    //                 $alamat_pmb= $this->input->post('alamat_pmb');
    //                 $notlp_pmb= $this->input->post('notlp_pmb');

    //                 //masuk ke file model
    //                 $this->transaksi_penjualan_model->intransaksi_penjualan($id_pmb,$nama_pmb,$alamat_pmb,$notlp_pmb);

    //             //}
    //         //setelah insert masuk ke halaman ini:
    //         redirect(base_url()."transaksi_penjualan/transaksi_penjualan_lihat"); 
    //     }

    //     public function transaksi_penjualan_lihat()
    // {
    //     //$data['h'] = $this->pembeli_model->lihat_pembeli();
    //     //$this->load->view('pegawai/header')->view('pegawai/penjualan/lihat',$data)->view('pegawai/footer');
    //     $this->load->view('pegawai/header')->view('pegawai/penjualan/lihat')->view('pegawai/footer');
    // }

    // public function form_update_transaksi_penjualan($id_pmb)
    //     {
    //         $data['h'] = $this->transaksi_penjualan_model->form_update_transaksi_penjualan($id_pmb);
    //         $this->load->view('pegawai/header')->view('pegawai/penjualan/ubah',$data)->view('pegawai/footer');
    //     }

    // public function update_transaksi_penjualan($id_pmb)
    //     {
    //         $nama_pmb= $this->input->post('nama_pmb');
    //         $alamat_pmb= $this->input->post('alamat_pmb');
    //         $notlp_pmb= $this->input->post('notlp_pmb');

    //         //masuk ke model
    //         $this->transaksi_penjualan_model->update_transaksi_penjualan($id_pmb,$nama_pmb,$alamat_pmb,$notlp_pmb);

    //         redirect(base_url()."transaksi_penjualan/transaksi_penjualan_lihat");
    //     }

    // public function halaman_delete_transaksi_penjualan($id_pmb)
    //     {
    //         $data['h'] = $this->transaksi_penjualan_model->form_update_transaksi_penjualan($id_pmb);
    //         $this->load->view('pegawai/header')->view('pegawai/penjualan/hapus',$data)->view('pegawai/footer');
    //     }

    // public function delete_transaksi_penjualan($id_pmb)
    //     {
    //         $this->transaksi_penjualan_model->delete_transaksi_penjualan($id_pmb);
    //         redirect(base_url()."transaksi_penjualan/transaksi_penjualan_lihat");
    //     }


    
    
}
?>