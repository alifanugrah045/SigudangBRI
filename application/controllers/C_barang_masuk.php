<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_barang_masuk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_barang_masuk');
        $this->form_validation->set_rules('nama_pegawai', 'NamaPegawai', 'required', ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('nama_suplier', 'Suplier', 'required', ['required' => 'Nama Suplier Wajib Diisi']);
        $this->form_validation->set_rules('nama_barang', 'NamaBarang', 'required', ['required' => 'Nama Barang Wajib Diisi']);
        $this->form_validation->set_rules('jumlah', 'JmlhBarang', 'required', ['required' => 'Jumlah Barang Wajib Diisi']);
    }
    public function index()
    {

        $data['barang'] = $this->model_barang_masuk->tampil_data_masuk();
        $data['pegawai'] = $this->model_barang_masuk->tampil_data_pegawai1();
        $data['suplier'] = $this->model_barang_masuk->tampil_data_suplier1();
        $data['barang1'] = $this->model_barang_masuk->tampil_data_barang1();

        $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_list_barang', $data);
        $this->load->view('v_footer');
    }


    public function tambahData()
    {

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id_masuk');
            $pegawai = $this->input->post('nama_pegawai');
            $suplier = $this->input->post('nama_suplier');
            $barang =  $this->input->post('nama_barang');
            $jumlah =  $this->input->post('jumlah');

            $data = array(
                'id_masuk' => $id,
                'id_pegawai' => $pegawai,
                'nama_suplier' => $suplier,
                'id_barang' => $barang,
                'jumlah' => $jumlah,
            );

            // $this->db->where('id_masuk', $id);
            $this->model_barang_masuk->insertData($data);
            $this->session->set_flashdata('message', 'Data Berhasil disimpan');
            redirect(base_url('C_barang_masuk/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('C_barang_masuk/index'));
        }
    }

    public function editUser()
    {
        if ($this->form_validation->run() == TRUE) {

            $id = $this->input->post('id_masuk');
            $pegawai = $this->input->post('nama_pegawai');
            $suplier = $this->input->post('nama_suplier');
            $barang =  $this->input->post('nama_barang');
            $jumlah =  $this->input->post('jumlah');

            $data1 = array(
                'id_masuk' => $id,
                'id_pegawai' => $pegawai,
                'nama_suplier' => $suplier,
                'id_barang' => $barang,
                'jumlah' => $jumlah,
            );
            $this->db->where('id_masuk', $id);
            $this->model_barang_masuk->editData($data1);
            $this->session->set_flashdata('message', 'Data Berhasil diedit!');
            redirect(base_url('C_barang_masuk/index'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal diedit');
            redirect(base_url('C_barang_masuk/index'));
        }
    }

    public function hapusdatauser($idmasuk)
    {
        if ($this->form_validation->run() != TRUE) {
            $where = array('id_masuk' => $idmasuk);
            $this->model_barang_masuk->hapusdata($where, 'tb_barang_masuk');
            $this->session->set_flashdata('message', 'Data Berhasil dihapus!');
            redirect(base_url('C_barang_masuk/index'));
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
            redirect(base_url('C_barang_masuk/index'));
        }
    }

    public function cetaklaporan(){
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $data['dari'] = $dari;
        $data['sampai'] = $sampai;
        $data['barang'] = $this->model_barang_masuk->tampil_data_masuk();
        $data['laporanmsk'] = $this->model_barang_masuk->getLaporan($dari,$sampai);
        $data['sum_jumlah'] = $this->model_barang_masuk->totalharga();
        $this->load->view('v_cetak_laporan',$data);
    }
}

/* End of file C_dashboard.php and path \application\controllers\C_dashboard.php */
