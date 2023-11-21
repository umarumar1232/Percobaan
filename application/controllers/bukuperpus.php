<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bukuperpus extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('perpustakaan');
    }
    function index(){
        $pinjam = 150;
        $tersedia = 300;   
        $rusak = 100;
        $dikembalikan = 200;
     

        $this->perpustakaan->Total($pinjam, $tersedia, $rusak, $dikembalikan);
        echo "<br/>";
        $this->perpustakaan->b($pinjam, $tersedia, $rusak, $dikembalikan);
        echo "<br/>";
        $this->perpustakaan->c($pinjam, $tersedia, $rusak, $dikembalikan);
        echo "<br/>";
    }
}
?>