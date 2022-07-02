<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_unit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->form_validation->set_rules('nama_unit', 'Nama', 'required', ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('alamat_unit', 'Alamat', 'required', ['required' => 'Alamat Wajib Diisi']);
    }
    public function index()
    {
        $data['unit'] = $this->model_unit->tampil_data_unit()->result();
        $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_unit', $data);
        $this->load->view('v_footer');
    }

    public function tambahuser()
    {
        if ($this->form_validation->run() == TRUE) {
            $nama = $this->input->post('nama_unit');
            $alamat = $this->input->post('alamat_unit');
            $id =  $this->input->post('id_unit');

            $data = array(
                'id_unit' => $id,
                'nama_unit' => $nama,
                'alamat_unit' => $alamat,
            );
            $this->db->where('id_unit', $id);
            $this->model_unit->insertdata($data);
            $this->session->set_flashdata('message', 'Data Berhasil disimpan');
            redirect(base_url('C_unit/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('C_unit/index'));
        }
    }

    public function editUser()
    {
        if ($this->form_validation->run() != TRUE) {
            $this->session->set_flashdata('error', 'Data gagal diedit');
            redirect(base_url('C_unit/index'));
        } else {
            $nama = $this->input->post('nama_unit');
            $alamat = $this->input->post('alamat_unit');
            $id =  $this->input->post('id_unit');

            $data1 = array(
                'id_unit' => $id,
                'nama_unit' => $nama,
                'alamat_unit' => $alamat,
            );
            $this->db->where('id_unit', $id);
            $this->model_unit->editdata($data1);
            $this->session->set_flashdata('message', 'Data Berhasil disimpan');
            redirect(base_url('C_unit/index'));
        }
    }

    public function hapusdatauser($idunit)
    {
        if ($this->form_validation->run() != TRUE) {
            $where = array('id_unit' => $idunit);
            $this->model_unit->hapusdata($where, 'tb_unit');
            $this->session->set_flashdata('message', 'Data Berhasil dihapus!');
            redirect(base_url('C_unit/index'));
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect(base_url('C_unit/index'));
        }
    }
}

/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
