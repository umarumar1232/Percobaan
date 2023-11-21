<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('User_model', 'userrole');
    } function index(){
        $data['judul'] = "Halaman Barang";
        $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_barang", $data);
        $this->load->view("layout/footer", $data);
    } function tambah(){
        $data['judul'] = "Halaman Tambah Barang";
            $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
            $data['barang'] = $this->Barang_model->get();
            $this->form_validation->set_rules('nama', 'Nama Barang', 'required',[
                'required' => 'Nama Barang Wajib di isi'
            ]);
            $this->form_validation->set_rules('kategori', 'Kategori barang', 'required',[
                'required' => 'Kategori Barang Wajib di isi'
            ]);
            $this->form_validation->set_rules('stok', 'Stok', 'required',[
                'required' => 'Stok Wajib di isi'
            ]);
            $this->form_validation->set_rules('harga', 'Harga', 'required',[
                'required' => 'Harga Wajib di isi'
            ]);
                if($this->form_validation->run()==false){
                $this->load->view("layout/header", $data);
                $this->load->view("barang/vw_tambah_barang", $data);
                $this->load->view("layout/footer");
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'kategori' => $this->input->post('kategori'),
                    'stok' => $this->input->post('stok'),
                    'harga' => $this->input->post('harga')
                ];
                $upload_image = $_FILES['gambar']['name'];
                if($upload_image){
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/assets/img/barang/';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('gambar')){
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('gambar', $new_image);
                    }else {
                        echo $this->upload->display_errors();
                    }
                }
                $this->Barang_model->insert($data, $upload_image);
                $this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Data Barang Berhasil Ditambah!</div>');
                redirect('Barang');
            }
        } function hapus($id){
        $this->Barang_model->delete($id);
        $error = $this->db->error();
        if($error['code']!=0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            <i class = "icon fas fa-info-circle"></i>Data Barang tidak dapat dihapus(sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <i class = "icon fas fa-check-circle"></i>Data Barang Berhasil Dihapus!</div>');
        }redirect('Barang');
    } 
}
?>