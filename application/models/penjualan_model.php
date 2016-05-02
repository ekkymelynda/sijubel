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

    function liat_TPU($id_tpu)
    {
        $this->db->where("id_tpu",$id_tpu);
        $query = $this->db->get('transaksi_penjualan');
        return $query->result();
    }

    function form_update_liat_barang($id_tpu)
    {
        $this->db->where("id_tpu",$id_tpu);
        $query = $this->db->get('membeli');
        return $query->result();
    }

    function update_TPU($TGL_TPU,$ID_TPU,$ID_PMB,$ID_PGW,$TOTAL_TPU,$BAYAR_TPU,$KEMBALIAN_TPU)
    {
        // $this->db->where("id_tpu",$id_tpu);
        // $query = $this->db->get('membeli');
        // $row=$query->row();

        //update tabel TPU
        $data = array(
            'TGL_TPU' => $TGL_TPU,
            // 'ID_TPU' => $ID_TPU,
            'ID_PMB' => $ID_PMB,
            'ID_PGW' => $ID_PGW,
            'TOTAL_TPU' => $TOTAL_TPU,
            'BAYAR_TPU' => $BAYAR_TPU,
            'KEMBALIAN_TPU' => $KEMBALIAN_TPU
            );
        $this->db->where("ID_TPU",$ID_TPU);
        $this->db->update('transaksi_penjualan', $data);

        //hitung berapa item barang yang diedit
        // $banyak=count($nama_brg);
        
        // //update tabel membeli
        // for ($c=1; $c<=$banyak; $c++)
        // {
        //     $data1 = array(
        //     'ID_BRG' => $nama_brg[$c],
        //     'BANYAK_BELI' => $jumlah[$c]
        //     );
        // $this->db->where("id_tpu",$id_tpu);
        // $this->db->update('membeli', $data1);
        // }
    }

    // function lihat_total_harga()

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

        $total=0;

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
            $total=$total + $row->HARGA_JUAL;
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

        //insert total belanja
            $data = array(
            'TOTAL_TPU' => $total
            );
            $this->db->where("ID_TPU", $ID_TPU);
            $this->db->update('transaksi_penjualan', $data);       
            $this->db->where("ID_TPU", $ID_TPU);
            $query2 = $this->db->get('transaksi_penjualan');
            return $query2->result();
    }

    function insert_total($ID_TPU,$BAYAR_TPU)
    {
        $this->db->where("id_tpu",$ID_TPU);
        $query = $this->db->get('transaksi_penjualan');
        $row=$query->row();

        $KEMBALIAN_TPU=$BAYAR_TPU-$row->TOTAL_TPU;

        $data = array(
            'BAYAR_TPU' => $BAYAR_TPU,
            'KEMBALIAN_TPU' =>$KEMBALIAN_TPU
            );
        $this->db->where("ID_TPU",$ID_TPU);
        $this->db->update('transaksi_penjualan',$data);
        return $KEMBALIAN_TPU;
    }
    
}
?>    