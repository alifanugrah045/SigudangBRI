<?php 

class Model_barang extends CI_Model{
    public function tampil_data_barang(){
       return $this->db->get_where('tb_barang');
    }

    public function insertdata($data)
    {
        return $this->db->insert('tb_barang', $data);
    }

    public function editdata($data1)
    {
        return $this->db->replace('tb_barang', $data1);
    }

    public function hapusdata($data2,$table)
    {
        return $this->db->delete($table,$data2);
    }
}
