<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class C_user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['barang'] = $this->model_user->tampil_data_user()->result();
        $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_user',$data);
        $this->load->view('v_footer');
        
    }
}

/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
