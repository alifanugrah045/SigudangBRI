<?php 

class Model_barang_keluar extends CI_Model{
    public function tampil_data_keluar(){
       return $this->db->get_where('v_barang_keluar');
    }
}


?>