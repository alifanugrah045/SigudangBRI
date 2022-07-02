<?php

class Model_suplier extends CI_Model
{
    public function tampil_data_suplier()
    {
        return $this->db->get_where('tb_suplier');
    }

    public function insertdata($data)
    {
        return $this->db->insert('tb_suplier', $data);
    }

    public function editdata($data1)
    {
        return $this->db->replace('tb_suplier', $data1);
    }

    public function hapusdata($data2,$table)
    {
        return $this->db->delete($table,$data2);
    }
}
