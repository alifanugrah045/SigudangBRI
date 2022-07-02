<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_suplier extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->form_validation->set_rules('nama_suplier', 'Nama', 'required', ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('no_hp_suplier', 'Nomor Hp', 'required', ['required' => 'No hp Wajib Diisi']);
    }

    public function index()
    {
        $data['suplier'] = $this->model_suplier->tampil_data_suplier()->result();
        $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_suplier', $data);
        $this->load->view('v_footer');
    }

    public function tambahuser()
    {
        if ($this->form_validation->run() != TRUE) {
            $nama = $this->input->post('nama_suplier');
            $no = $this->input->post('no_suplier');
            $id =  $this->input->post('id_suplier');

            $data = array(
                'id_suplier' => $id,
                'nama_suplier' => $nama,
                'no_hp_suplier' => $no,
            );
            $this->db->where('id_suplier', $id);
            $this->model_suplier->insertdata($data);
            $this->session->set_flashdata('message', 'Data Berhasil disimpan');
            redirect(base_url('C_suplier/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('C_suplier/index'));
        }
    }

    public function editUser()
    {
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('error', 'Data gagal diedit');
            redirect(base_url('C_suplier/index'));
        } else {
            $nama = $this->input->post('nama_suplier');
            $no = $this->input->post('no_suplier');
            $id =  $this->input->post('id_suplier');

            $data1 = array(
                'id_suplier' => $id,
                'nama_suplier' => $nama,
                'no_hp_suplier' => $no,
            );
            $this->db->where('id_suplier', $id);
            $this->model_suplier->editdata($data1);
            $this->session->set_flashdata('message', 'Data Berhasil diedit');
            redirect(base_url('C_suplier/index'));
        }
    }

    public function hapusdatauser($idsuplier)
    {
        if ($this->form_validation->run() != TRUE) {
            $where = array('id_suplier' => $idsuplier);
            $this->model_user->hapusdata($where, 'tb_suplier');
            $this->session->set_flashdata('message', 'Data Berhasil dihapus!');
            redirect(base_url('C_suplier/index'));
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect(base_url('C_suplier/index'));
        }
    }
}

/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
