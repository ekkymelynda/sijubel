<?php

class penjualan_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
      
    function lihat_penjualan()
    {
        $query = $this->db->get('transaksi_penjualan');
        //return $query->result_array();
        return $query;
    }

    function lihat_penjualan_perhari($tgl_tpu)
    {
        $query = $this->db->query("SELECT * FROM `transaksi_penjualan` WHERE id_pgw='$id_pgw' and pswd_pgw='$pswd_pgw'");
        //return $query->result_array();
        return $query;
    }

    function form_update_penjualan($id_tpu)
    {
        $this->db->where("id_tpu",$id_tpu);
        $query = $this->db->get('transaksi_penjualan');
        return $query;
    }

    function delete_penjualan($id_tpu)
    {
        $this->db->where("id_tpu",$id_tpu);
        $this->db->delete('transaksi_penjualan');
    }

    function lihat_barang()
    {
        $this->db->distinct();
        $query = $this->db->get('barang');
        return $query->result();

        // $query=$this->db->query("select distinct nama_brg from barang");
        //return $query->result;
    }

    function lihat_pegawai()
    {  
        $this->db->distinct();
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    function lihat_pembeli()
    {   
        $this->db->distinct();
        $query = $this->db->get('pembeli');
        return $query->result();
    }


    function intransaksi_penjualan($TGL_TPU,$ID_TPU,$ID_PMB,$ID_PGW,$nama_brg,$jumlah)
    {
        //insert TPU
        $data = array(
            'TGL_TPU' => $TGL_TPU,
            'ID_TPU' => $ID_TPU,
            'ID_PMB' => $ID_PMB,
            'ID_PGW' => $ID_PGW
            );
        $this->db->insert('transaksi_penjualan', $data);

        for ($i=0; $i <= 10; $i++)
        {   
            if(!empty($nama_brg[$i]))
            {
        //memilih record barang yg dibeli
            $this->db->where("NAMA_BRG",$nama_brg[$i]);
            $query = $this->db->get('barang');
            $row=$query->row();

        //menghitung sisa barang
            $sisa_brg=$row->JUMLAH_BRG - $jumlah[$i];

        //insert ke membeli
            $data1 =array(
                'ID_TPU' => $ID_TPU,
                'ID_BRG' => $row->ID_BRG,
                'BANYAK_BELI' => $jumlah[$i]
                );
            $this->db->insert('membeli', $data1);

        //update data barang
            $data2 = array(
                'JUMLAH_BRG' => $sisa_brg
                );

            $this->db->where("id_brg",$row->ID_BRG);
            $this->db->update('barang', $data2);
            //return $row->ID_BRG;
            }
        }


        // $this->db->where("NAMA_BRG",$nama_brg[]);
        // $query = $this->db->get('barang');
        // $row=$query->row();

        // //mencari sisa barang
        // $sisa_brg=$row->JUMLAH_BRG - $Jumlah1;

        // $data1 =array(
        //     'ID_TPU' => $ID_TPU,
        //     'ID_BRG' => $row->ID_BRG,
        //     'BANYAK_BELI' => $Jumlah1,
        //     );
        // $this->db->insert('membeli', $data1);

        // $data2 = array(
        //     'JUMLAH_BRG' => $sisa_brg
        //     );

        // $this->db->where("id_brg",$row->ID_BRG);
        // $this->db->update('barang', $data2);

        // $this->db->where("id_brg",$row->ID_BRG);
        // $this->db->set('JUMLAH_BRG', $sisa_brg);
    }
    
}
?>    