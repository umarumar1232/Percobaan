<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Prodi_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('User_model', 'userrole');
    }
    function index(){
        $data['judul'] = "Halaman prodi";
        $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);
    } 
    function tambah(){
        $data['judul'] = "Halaman Tambah Prodi";
            $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
            $data['prodi'] = $this->Prodi_model->get();
            $data['mahasiswa'] = $this->Mahasiswa_model->get();
    
            $this->form_validation->set_rules('prodi', 'Nama Prodi', 'required',[
                'required' => 'Nama Prodi Wajib di isi'
            ]);
            $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required',[
                'required' => 'NIM Mahasiswa Wajib di isi'
            ]);
            $this->form_validation->set_rules('ruangan', 'Ruangan', 'required',[
                'required' => 'Ruangan Kaprodi Wajib di isi'
            ]);
            $this->form_validation->set_rules('kaprodi', 'Kaprodi', 'required',[
                'required' => 'Nama Kaprodi Wajib di isi'
            ]);
                if($this->form_validation->run()==false){
                $this->load->view("layout/header", $data);
                $this->load->view("prodi/vw_tambah_prodi", $data);
                $this->load->view("layout/footer");
            } else {
                $data = [
                    'prodi' => $this->input->post('prodi'),
                    'akreditasi' => $this->input->post('akreditasi'),
                    'ruangan' => $this->input->post('ruangan'),
                    'kaprodi' => $this->input->post('kaprodi')
                ];
                $upload_image = $_FILES['gambar']['name'];
                if($upload_image){
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/assets/img/prodi/';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('gambar')){
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('gambar', $new_image);
                    }else {
                        echo $this->upload->display_errors();
                    }
                }
                $this->Prodi_model->insert($data, $upload_image);
                $this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
                redirect('Prodi');
            }
        }
    // function upload(){
    //     $data = [
    //         'prodi' => $this->input->post('prodi'),
    //         'akreditasi' => $this->input->post('akreditasi'),
    //         'ruangan' => $this->input->post('ruangan'),
    //         'kaprodi' => $this->input->post('kaprodi'),
    //     ];
    //     $this->Prodi_model->insert($data);
    //     redirect('Mahasiswa/index');
    // } 
    function detail($id){
        $data['judul'] = "Halaman Detail prodi";
        $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_detail_prodi", $data);
        $this->load->view("layout/footer");
    } 
    function edit($id){
        $data['judul'] = "Halaman Edit Prodi";
            $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
            $data['prodi'] = $this->Prodi_model->getById($id);
            $data['mahasiswa'] = $this->Mahasiswa_model->get();
    
            $this->form_validation->set_rules('prodi', 'Nama Prodi', 'required',[
                'required' => 'Nama Prodi Wajib di isi'
            ]);
            $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required',[
                'required' => 'NIM Mahasiswa Wajib di isi'
            ]);
            $this->form_validation->set_rules('ruangan', 'Ruangan', 'required',[
                'required' => 'Ruangan Kaprodi Wajib di isi'
            ]);
            $this->form_validation->set_rules('kaprodi', 'Kaprodi', 'required',[
                'required' => 'Nama Kaprodi Wajib di isi'
            ]);
                if($this->form_validation->run()==false){
                $this->load->view("layout/header", $data);
                $this->load->view("prodi/vw_edit_prodi", $data);
                $this->load->view("layout/footer",$data);
            } else {
                $data = [
                    'prodi' => $this->input->post('prodi'),
                    'akreditasi' => $this->input->post('akreditasi'),
                    'ruangan' => $this->input->post('ruangan'),
                    'kaprodi' => $this->input->post('kaprodi')
                ];
                $upload_image = $_FILES['gambar']['name'];
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/assets/img/prodi/';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('gambar')) {
                        $old_image = $data['gambar']['name'];
                        if ($old_image != 'default.jpg') {
                            unlink(FCPATH . 'assets/assets/img/prodi/' . $old_image);
                        }
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('gambar', $new_image);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
                $id = $this->input->post('id');
                $this->Prodi_model->update(['id' => $id], $data, $upload_image);
                $this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Data Prodi berhasil diubah!</div>');
                redirect('Prodi');
            }
        }
    function hapus($id){
        $this->Prodi_model->delete($id);
        $error = $this->db->error();
        if($error['code']!=0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            <i class = "icon fas fa-info-circle"></i>Data Prodi tidak dapat dihapus(sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <i class = "icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
        }
        redirect('Prodi');
    } 
    // function update_prodi(){
    //     $data = [
    //         'prodi' => $this->input->post('prodi'),
    //         'akreditasi' => $this->input->post('akreditasi'),
    //         'ruangan' => $this->input->post('ruangan'),
    //         'kaprodi' => $this->input->post('kaprodi'),
    //         ];
    //     $id = $this->input->post('id');
    //     $this->Prodi_model->update(['id' => $id], $data);
    //     redirect('Prodi');
    // }
}
?>