<?php

class Mixing extends Controller
{
    public function __construct()
    {
        // if ($_SESSION['session_login'] != 'sudah_login') {
        //     Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
        //     header('location: ' . base_url . '/login');
        //     exit;
        // }
    }
    public function index()
    {
        $data['title'] = 'Paduan Pakaian | Fashion Design';
        $data['mix_page'] = 'index';
        $data['css'] =
            array("sidebar", "paduan-pakaian");
        $data['script'] =
            array("paduan-pakaian");
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('mixing/index', $data);
        $this->view('templates/footer', $data);
    }
    public function cari()
    {
        $data['title'] = 'Data Kategori';
        $data['kategori'] = $this->model('KategoriModel')->cariKategori();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }
}
