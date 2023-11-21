<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capres extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Capres_model');
        }
        function index(){
        $data['judul'] = "Halaman capres";
        $data['capres'] = $this->Capres_model->get();
        $this->load->view("layout/header");
        $this->load->view("capres/vw_capres", $data);
        $this->load->view("layout/footer");
    } 
    function tambah(){
        $data['judul'] = "Halaman Tambah Capres";
        $data['capres'] = $this->Capres_model->get();
        $this->load->view("layout/header");
        $this->load->view("capres/vw_tambah_capres", $data);
        $this->load->view("layout/footer");
    }
    function detail($id){
        $data['judul'] = "Halaman Detail Capres";
        $data['capres'] = $this->capres_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view('capres/vw_detail_capres', $data);
        $this->load->view("layout/footer");
    }
    function upload(){
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'umur' => $this->input->post('umur'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
        ];
        $this->Capres_model->insert($data);
        redirect('Capres');
    }
    function edit($id){
        $data['judul'] = "Halaman Edit Capres";
        // $data['prodi'] = $this->Prodi_model->get();
        $data['capres'] = $this -> Capres_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_edit_capres", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id){
        $this->Capres_model->delete($id);
        redirect('Capres');
    }
    function update(){
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'umur' => $this->input->post('umur'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung')
        ];
        $id = $this->input->post('id');
        $this->Capres_model->update(['id' => $id], $data);
        redirect('Capres');
    }
}