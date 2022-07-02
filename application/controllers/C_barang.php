<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->form_validation->set_rules('nama_barang', 'NamaBarang', 'required', ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('harga_barang', 'HargaBarang', 'required', ['required' => 'Harga Wajib Diisi']);
    }
    public function index()
    {
        $data['databarang'] = $this->model_barang->tampil_data_barang()->result();
        $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_data_barang', $data);
        $this->load->view('v_footer');
    }

    public function tambahdata()
    {

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id_barang');
            $nama = $this->input->post('nama_barang');
            $harga = $this->input->post('harga_barang');


            $data = array(
                'id_barang' => $id,
                'nama_barang' => $nama,
                'harga_barang' => $harga,
            );
            $this->db->where('id_barang', $id);
            $this->model_barang->insertdata($data);
            $this->session->set_flashdata('message', 'Data Berhasil disimpan');
            redirect(base_url('C_barang/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('C_barang/index'));
        }
    }

    public function editUser()
    {
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data gagal diedit');
            redirect(base_url('C_barang/index'));
        } else {
            $id = $this->input->post('id_barang');
            $nama = $this->input->post('nama_barang');
            $harga = $this->input->post('harga_barang');


            $data1 = array(
                'id_barang' => $id,
                'nama_barang' => $nama,
                'harga_barang' => $harga,
            );
            $this->db->where('id_barang', $id);
            $this->model_barang->editdata($data1);
            $this->session->set_flashdata('message', 'Data Berhasil diedit!');
            redirect(base_url('C_barang/index'));
        }
    }

    public function hapusdatauser($idbarang)
    {
        if ($this->form_validation->run() != TRUE) {
            $where = array('id_barang' => $idbarang);
            $this->model_user->hapusdata($where, 'tb_barang');
            $this->session->set_flashdata('message', 'Data Berhasil dihapus!');
            redirect(base_url('C_barang/index'));
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect(base_url('C_barang/index'));
        }
    }
}

/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
