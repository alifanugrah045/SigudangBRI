<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    
    public function index(){
        $this->load->view('v_login');
    }

    public function login_aksi(){
        $user = $this->input->post('username',true);
        $password = $this->input->post('password',true);

        // rule validasi
        $this->form_validation->set_rules('username','Username','required',['required' => 'Username Wajib Diisi']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Password Wajib Diisi']);

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'username' => $user,
                'password' => $password,

            );

           $cekLogin = $this->m_login->cek_login($where)->num_rows();

           if ($cekLogin > 0) {
               $sess_data = array(
                    'username' => $user,
                    'login' => 'OKE'
               );

               $this->session->set_userdata($sess_data);
               redirect(base_url('c_dashboard'));

           }else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Email atau password salah!
          </div>');
            redirect(base_url('auth'));
           }

        }else{
            $this->load->view('v_login');
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }

}
?>
