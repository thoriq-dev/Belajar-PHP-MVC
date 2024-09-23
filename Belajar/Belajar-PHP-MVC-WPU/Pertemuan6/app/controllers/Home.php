<?php

class Home extends Controller
{
    public function index()
    {
        // echo "Home/index";

        // Mengirimkan Data untuk judul halaman Home
        $data['judul'] = 'Home';
        // Memanggil Views
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
