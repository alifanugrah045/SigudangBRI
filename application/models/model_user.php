<?php

class Model_user extends CI_Model
{
    public function tampil_data_user()
    {
        return $this->db->get_where('tb_users');
    }

    public function insertdata($data)
    {
        return $this->db->insert('tb_users', $data);
    }

    public function editdata($data1)
    {
        return $this->db->replace('tb_users', $data1);
    }

    public function hapusdata($data2,$table)
    {
        return $this->db->delete($table,$data2);
    }
}
