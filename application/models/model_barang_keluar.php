<?php

class Model_barang_keluar extends CI_Model
{
    public function tampil_data_keluar()
    {
        $this->db->select('tb_barang_keluar.*,tb_barang.*,tb_pegawai.*');
        $this->db->from('tb_barang_keluar');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_keluar.id_barang');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_barang_keluar.id_pegawai');
        $return = $this->db->get('');
        return $return->result();
    }

    public function tampil_data_pegawai1()
    {
        return $this->db->get('tb_pegawai');
    }

    public function tampil_data_unit1()
    {
        return $this->db->get('tb_unit');
    }

    public function tampil_data_barang1()
    {
        return $this->db->get('tb_barang');
    }

    public function insertdata($data)
    {
        return $this->db->insert('tb_barang_keluar', $data);
    }

    public function editData($data)
    {
        return $this->db->replace('tb_barang_keluar', $data);
    }

    public function hapusdata($data2, $table)
    {
        return $this->db->delete($table, $data2);
    }
    public function getLaporan($dari, $sampai)
    {
        $this->db->where('tanggal_keluar >=', $dari);
        $this->db->where('tanggal_keluar <=', $sampai);
        $this->db->select('tb_barang_keluar.*,tb_barang.*,tb_pegawai.*');
        $this->db->from('tb_barang_keluar');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_keluar.id_barang');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_barang_keluar.id_pegawai');
        $this->db->select('id_keluar,harga_barang,(jumlah_keluar * harga_barang) as total_harga');
        $return = $this->db->get();
        return $return->result();
    }

    public function totalharga()
    {
        $this->db->select_sum('jumlah_keluar');
        $this->db->from('tb_barang_keluar');
        return $this->db->get('')->row();
    }
}

