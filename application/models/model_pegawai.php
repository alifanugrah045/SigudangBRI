<?php 

class Model_pegawai extends CI_Model{
    public function tampil_data_pegawai(){
       return $this->db->get_where('tb_pegawai');
    }

    public function insertdata($data)
    {
        return $this->db->insert('tb_pegawai', $data);
    }

    public function editdata($data1)
    {
        return $this->db->replace('tb_pegawai', $data1);
    }

    public function hapusdata($data2,$table)
    {
        return $this->db->delete($table,$data2);
    }
}
