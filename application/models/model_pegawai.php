<?php 

class Model_pegawai extends CI_Model{
    public function tampil_data_pegawai(){
       return $this->db->get_where('tb_pegawai');
    }
}


?>