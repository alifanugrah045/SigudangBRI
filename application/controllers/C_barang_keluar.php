<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class C_barang_keluar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model(['model_barang', 'model_pegawai', 'model_suplier', 'model_barang_masuk']);
        $this->form_validation->set_rules('nama_pegawai', 'NamaPegawai', 'required', ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('nama_unit', 'Unit', 'required', ['required' => 'Nama Suplier Wajib Diisi']);
        $this->form_validation->set_rules('nama_barang', 'NamaBarang', 'required', ['required' => 'Nama Barang Wajib Diisi']);
        $this->form_validation->set_rules('jumlah_barang', 'JmlhBarang', 'required', ['required' => 'Jumlah Barang Wajib Diisi']);
    }
    public function index()
    {
    
        $data['keluar'] = $this->model_barang_keluar->tampil_data_keluar();
        $data['unit'] = $this->model_barang_keluar->tampil_data_unit1();
        $data['pegawai'] = $this->model_barang_keluar->tampil_data_pegawai1();
        $data['barang'] = $this->model_barang_keluar->tampil_data_barang1();
        $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_barang_keluar', $data);
        $this->load->view('v_footer');
        
    }

    public function tambahData()
    {

        if ($this->form_validation->run() != TRUE) {
            $id = $this->input->post('id_keluar');
            $pegawai = $this->input->post('nama_pegawai');
            $unit = $this->input->post('nama_unit');
            $barang =  $this->input->post('nama_barang');
            $jumlah =  $this->input->post('jumlah_keluar');

            $data = array(
                'id_keluar' => $id,
                'id_pegawai' => $pegawai,
                'nama_unit' => $unit,
                'id_barang' => $barang,
                'jumlah_keluar' => $jumlah,
            );


            $this->model_barang_keluar->insertdata($data);
            $this->session->set_flashdata('message', 'Data Berhasil disimpan');
            redirect(base_url('C_barang_keluar/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('C_barang_keluar/index'));
        }
    }

    public function editUser()
    {
        if ($this->form_validation->run() != TRUE) {

            $id = $this->input->post('id_keluar');
            $pegawai = $this->input->post('nama_pegawai');
            $unit = $this->input->post('nama_unit');
            $barang =  $this->input->post('nama_barang');
            $jumlah =  $this->input->post('jumlah_keluar');

            $data1 = array(
                'id_keluar' => $id,
                'id_pegawai' => $pegawai,
                'nama_unit' => $unit,
                'id_barang' => $barang,
                'jumlah_keluar' => $jumlah,
            );
            $this->db->where('id_keluar', $id);
            $this->model_barang_keluar->editData($data1);
            $this->session->set_flashdata('message', 'Data Berhasil diedit!');
            redirect(base_url('C_barang_keluar/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal diedit');
            redirect(base_url('C_barang_keluar/index'));
        }
    }

    public function hapusdatauser($idkeluar)
    {
        if ($this->form_validation->run() != TRUE) {
            $where = array('id_keluar' => $idkeluar);
            $this->model_barang_keluar->hapusdata($where, 'tb_barang_keluar');
            $this->session->set_flashdata('message', 'Data Berhasil dihapus!');
            redirect(base_url('C_barang_keluar/index'));
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect(base_url('C_barang_keluar/index'));
        }
    }

    public function cetaklaporan(){
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $data['dari'] = $dari;
        $data['sampai'] = $sampai;
        $data['laporanklr'] = $this->model_barang_keluar->getLaporan($dari,$sampai);
        $data['sum_jumlah'] = $this->model_barang_keluar->totalharga();
        $this->load->view('v_cetak_laporan_keluar',$data);
    }

}

/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
