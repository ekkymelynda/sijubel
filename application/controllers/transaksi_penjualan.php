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
     

    function __construct() {
        parent::__construct();
        $this->load->model('penjualan_model');
        // $this->load->model('pegawai_model');
        // $this->load->model('pembeli_model');
       }
    
    public function transaksi_penjualan_buat()
    {

        $data['h'] = $this->penjualan_model->lihat_barang();
        $data['peg']= $this->penjualan_model->lihat_pegawai();
        $data['pem']= $this->penjualan_model->lihat_pembeli();
        //$data['h'] = ($data['h']->fetch_assoc());

         // return print_r($data3['pem']);

        $this->load->view('pegawai/header')
                        ->view('pegawai/penjualan/buat2', $data)
                        ->view('pegawai/footer');

    }
    
    public function insert_transaksi_penjualan()
        {
            //if(!empty($_POST['id_pmb']))
              //  {
                    $TGL_TPU=$this->input->post('TGL_TPU');
                    $ID_TPU= $this->input->post('ID_TPU');
                    $ID_PMB= $this->input->post('ID_PMB');
                    $ID_PGW= $this->input->post('ID_PGW');
                    
                    $nama_brg= array(
                        $this->input->post('nama_brg1'),
                        $this->input->post('nama_brg2'),
                        $this->input->post('nama_brg3')
                        // $this->input->post('nama_brg4'),
                        // $this->input->post('nama_brg5'),
                        // $this->input->post('nama_brg6'),
                        // $this->input->post('nama_brg7'),
                        // $this->input->post('nama_brg8'),
                        // $this->input->post('nama_brg9'),
                        // $this->input->post('nama_brg10')
                        );
                    $jumlah= array(
                        $this->input->post('Jumlah1'),
                        $this->input->post('Jumlah2'),
                        $this->input->post('Jumlah3')
                        // $this->input->post('Jumlah4'),
                        // $this->input->post('Jumlah5'),
                        // $this->input->post('Jumlah6'),
                        // $this->input->post('Jumlah7'),
                        // $this->input->post('Jumlah8'),
                        // $this->input->post('Jumlah9'),
                        // $this->input->post('Jumlah10')
                        );
                    // $nama_brg= $this->input->post('nama_brg2');
                    // $Jumlah1 = $this->input->post('Jumlah1');

                    // return print_r($nama_brg[0]);


                    //masuk ke file model
                    $total['t']=$this->penjualan_model->intransaksi_penjualan($TGL_TPU,$ID_TPU,$ID_PMB,$ID_PGW,$nama_brg,$jumlah);
                    $this->load->view('pegawai/header')->view('pegawai/penjualan/total',$total)->view('pegawai/footer');
                     

                //}
            //setelah insert masuk ke halaman ini:
           // redirect(base_url()."transaksi_penjualan/transaksi_penjualan_total"); 
        }

        public function insert_total_TPU($ID_TPU)
    {
        $BAYAR_TPU= $this->input->post('BAYAR_TPU');
        $ID_TPU= $this->input->post('ID_TPU');

        $data['a']=$this->penjualan_model->insert_total($ID_TPU,$BAYAR_TPU);
        // return print_r($kembali);

        $this->load->view('pegawai/header')
                        ->view('pegawai/penjualan/kembali',$data)
                        ->view('pegawai/footer');
    }


        public function transaksi_penjualan_lihat()
    {
        $data['h'] = $this->penjualan_model->lihat_penjualan();
        $this->load->view('pegawai/header')->view('pegawai/penjualan/lihat',$data)->view('pegawai/footer');
        // $this->load->view('pegawai/penjualan/buat3');
    }

    public function form_update_TPU($ID_TPU)
        {   
            $data['h'] = $this->penjualan_model->lihat_barang();
            $data['i'] = $this->penjualan_model->liat_TPU($ID_TPU);
            $data['j'] = $this->penjualan_model->form_update_liat_barang($ID_TPU);
            $data['peg']= $this->penjualan_model->lihat_pegawai();
            $data['pem']= $this->penjualan_model->lihat_pembeli();
            $this->load->view('pegawai/header')
                        ->view('pegawai/penjualan/ubah', $data)
                        ->view('pegawai/footer');
        }

    public function update_transaksi_penjualan($ID_TPU)
        {           $data2['i'] = $this->penjualan_model->form_update_liat_barang($ID_TPU);
                    // $banyak=0;
                    // foreach ($i as $row)
                    // {
                    //     $banyak++;
                    // }
                    $banyak=count($i);

                    $TGL_TPU=$this->input->post('TGL_TPU');
                    $ID_TPU= $this->input->post('ID_TPU');
                    $ID_PMB= $this->input->post('ID_PMB');
                    $ID_PGW= $this->input->post('ID_PGW');
                    
                    // $banyak=count($data2);

                    $data['nama_brg'];
                    for ($a=1; $a<=$banyak; $a++)
                    {
                        $data['nama_brg']=$this->input->post('nama_brg'.$a);
                    }

                    $data1['jumlah'];
                    for ($a=1; $a<=$banyak; $a++)
                    {
                        $data1['jumlah']=$this->input->post('jumlah'.$a);
                    }
                    // $nama_brg= array(
                    //     // for ($a=1; $a<=$banyak; $a++)
                    //     //     $this->input->post('nama_brg'.$a),
                        
                    //     if(!empty($_POST['nama_brg1']))
                    //         $this->input->post('nama_brg1'),
                    //     if(!empty($_POST['nama_brg2']))
                    //         $this->input->post('nama_brg2'),
                    //     if(!empty($_POST['nama_brg3']))
                    //         $this->input->post('nama_brg3')
                    //     // $this->input->post('nama_brg4'),
                    //     // $this->input->post('nama_brg5'),
                    //     // $this->input->post('nama_brg6'),
                    //     // $this->input->post('nama_brg7'),
                    //     // $this->input->post('nama_brg8'),
                    //     // $this->input->post('nama_brg9'),
                    //     // $this->input->post('nama_brg10')
                    //     );
                    // $jumlah= array(
                    //     // for ($b=1 ; $b <= $banyak; $b++)
                    //     //     $this->input->post('Jumlah'.$a),
                        
                    //     if(!empty($_POST['Jumlah1']))
                    //         $this->input->post('Jumlah1'),
                    //     if(!empty($_POST['Jumlah2']))
                    //         $this->input->post('Jumlah2'),
                    //     if(!empty($_POST['Jumlah3']))
                    //         $this->input->post('Jumlah3')
                    //     // $this->input->post('Jumlah4'),
                        // $this->input->post('Jumlah5'),
                        // $this->input->post('Jumlah6'),
                        // $this->input->post('Jumlah7'),
                        // $this->input->post('Jumlah8'),
                        // $this->input->post('Jumlah9'),
                        // $this->input->post('Jumlah10')
                        // );

                    //ke database
                    $this->penjualan_model->update_TPU($TGL_TPU,$ID_TPU,$ID_PMB,$ID_PGW,$data,$data1);
        }

    // public function update_transaksi_penjualan($id_pmb)
    //     {
    //         $nama_pmb= $this->input->post('nama_pmb');
    //         $alamat_pmb= $this->input->post('alamat_pmb');
    //         $notlp_pmb= $this->input->post('notlp_pmb');

    //         //masuk ke model
    //         $this->transaksi_penjualan_model->update_transaksi_penjualan($id_pmb,$nama_pmb,$alamat_pmb,$notlp_pmb);

    //         redirect(base_url()."transaksi_penjualan/transaksi_penjualan_lihat");
    //     }

    public function halaman_delete_transaksi_TPU($id_TPU)
        {
            $data['h'] = $this->penjualan_model->form_update_transaksi_penjualan($id_pmb);
            $this->load->view('pegawai/header')->view('pegawai/penjualan/hapus',$data)->view('pegawai/footer');
        }

    // public function delete_transaksi_penjualan($id_pmb)
    //     {
    //         $this->transaksi_penjualan_model->delete_transaksi_penjualan($id_pmb);
    //         redirect(base_url()."transaksi_penjualan/transaksi_penjualan_lihat");
    //     }


    
    
}
?>