<?php

class Model_unit extends CI_Model
{
    public function tampil_data_unit()
    {
        return $this->db->get_where('tb_unit');
    }

    public function insertdata($data)
    {
        return $this->db->insert('tb_unit', $data);
    }

    public function editdata($data1)
    {
        return $this->db->replace('tb_unit', $data1);
    }

    public function hapusdata($data2,$table)
    {
        return $this->db->delete($table,$data2);
    }
}
