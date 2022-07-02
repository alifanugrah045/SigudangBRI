<?php

class Model_barang_masuk extends CI_Model
{
    public function tampil_data_masuk()
    {
        $this->db->select('tb_barang_masuk.*,tb_barang.*,tb_pegawai.*');
        $this->db->from('tb_barang_masuk');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_masuk.id_barang');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_barang_masuk.id_pegawai');
        $return = $this->db->get();
        return $return->result();
    }
    public function tampil_data_pegawai1()
    {
        return $this->db->get('tb_pegawai');
    }

    public function tampil_data_suplier1()
    {
        return $this->db->get('tb_suplier');
    }

    public function tampil_data_barang1()
    {
        return $this->db->get('tb_barang');
    }

    public function insertData($data)
    {
        return $this->db->insert('tb_barang_masuk', $data);
    }

    public function editData($data)
    {
        return $this->db->replace('tb_barang_masuk', $data);
    }

    public function hapusdata($data2, $table)
    {
        return $this->db->delete($table, $data2);
    }

    public function getLaporan($dari, $sampai)
    {
        $this->db->where('tanggal_masuk >=', $dari);
        $this->db->where('tanggal_masuk <=', $sampai);
        $this->db->select('tb_barang_masuk.*,tb_barang.*,tb_pegawai.*');
        $this->db->from('tb_barang_masuk');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_masuk.id_barang');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_barang_masuk.id_pegawai');
        $this->db->select('id_masuk,harga_barang,(jumlah * harga_barang) as total_harga');
        $return = $this->db->get();
        return $return->result();
        
    }

    public function totalharga()
    {
        $this->db->select_sum('jumlah','total');
        $this->db->from('tb_barang_masuk');
        return $this->db->get('')->row();
    }
}
