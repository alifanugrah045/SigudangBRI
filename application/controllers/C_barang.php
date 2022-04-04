<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class C_barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('v_list_barang');
    }
}

/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
