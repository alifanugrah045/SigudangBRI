<?php 

class Model_barang_masuk extends CI_Model{
    public function tampil_data_masuk(){
       return $this->db->get_where('v_barang_masuk');
    }
}


?>