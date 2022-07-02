<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib Diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Wajib Diisi']);
    }
    public function index()
    {
        $data['users'] = $this->model_user->tampil_data_user()->result();
        $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_user', $data);
        $this->load->view('v_footer');
    }

    public function tambahuser()
    {
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $iduser =  $this->input->post('id_user');

            $data = array(
                'id_user' => $iduser,
                'username' => $username,
                'password' => $password,
            );
            $this->db->where('id_user', $iduser);
            $this->model_user->insertdata($data);
            $this->session->set_flashdata('message', 'Data Berhasil disimpan');
            redirect(base_url('C_user/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('C_user/index'));
        }
    }

    public function editUser()
    {
        if ($this->form_validation->run() != FALSE) {
            $this->session->set_flashdata('error', 'Data gagal diedit');
            redirect(base_url('C_user/index'));
        } else {
            $username = $this->input->post('username1');
            $password = $this->input->post('password1');
            $iduser =  $this->input->post('id_user1');

            $data1 = array(
                'id_user' => $iduser,
                'username' => $username,
                'password' => $password,
            );
            $this->db->where('id_user', $iduser);
            $this->model_user->editdata($data1);
            $this->session->set_flashdata('message', 'Data Berhasil diedit!');
            redirect(base_url('C_user/index'));
        }
    }

    public function hapusdatauser($iduser)
    {
        if ($this->form_validation->run() != TRUE) {
            $where = array('id_user' => $iduser);
            $this->model_user->hapusdata($where, 'tb_users');
            $this->session->set_flashdata('message', 'Data Berhasil dihapus!');
            redirect(base_url('C_user/index'));
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect(base_url('C_user/index'));
        }
    }
}


/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
