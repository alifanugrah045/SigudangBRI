<?php 

class Model_user extends CI_Model{
    public function tampil_data_user(){
       return $this->db->get_where('tb_user');
    }
}


?>