<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->form_validation->set_rules('nama_pegawai', 'NamaPegawai', 'required', ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('nip_pegawai', 'Nip', 'required', ['required' => 'Nip Wajib Diisi']);
        $this->form_validation->set_rules('jabatan_pegawai', 'Jabatan', 'required', ['required' => 'Jabatan Wajib Diisi']);
    }
    public function index()
    {
        $data['pegawai'] = $this->model_pegawai->tampil_data_pegawai()->result();
        $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_pegawai', $data);
        $this->load->view('v_footer');
    }

    public function tambahuser()
    {

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id_pegawai');
            $nama = $this->input->post('nama_pegawai');
            $nip = $this->input->post('nip_pegawai');
            $jabatan =  $this->input->post('jabatan_pegawai');

            $data = array(
                'id_pegawai' => $id,
                'nama_pegawai' => $nama,
                'nip_pegawai' => $nip,
                'jabatan_pegawai' => $jabatan,
            );
            $this->db->where('id_pegawai', $id);
            $this->model_pegawai->insertdata($data);
            $this->session->set_flashdata('message', 'Data Berhasil disimpan');
            redirect(base_url('C_pegawai/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('C_pegawai/index'));
        }
    }

    public function editUser()
    {
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data gagal diedit');
            redirect(base_url('C_pegawai/index'));
        } else {
            $id = $this->input->post('id_pegawai');
            $nama = $this->input->post('nama_pegawai');
            $nip = $this->input->post('nip_pegawai');
            $jabatan =  $this->input->post('jabatan_pegawai');

            $data1 = array(
                'id_pegawai' => $id,
                'nama_pegawai' => $nama,
                'nip_pegawai' => $nip,
                'jabatan_pegawai' => $jabatan,
            );
            $this->db->where('id_pegawai', $id);
            $this->model_pegawai->editdata($data1);
            $this->session->set_flashdata('message', 'Data Berhasil diedit!');
            redirect(base_url('C_pegawai/index'));
        }
    }

    public function hapusdatauser($idpegawai)
    {
        if ($this->form_validation->run() != TRUE) {
            $where = array('id_pegawai' => $idpegawai);
            $this->model_user->hapusdata($where, 'tb_pegawai');
            $this->session->set_flashdata('message', 'Data Berhasil dihapus!');
            redirect(base_url('C_pegawai/index'));
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect(base_url('C_pegawai/index'));
        }
    }
}

/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
