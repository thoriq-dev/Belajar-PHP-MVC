<?php

class Home extends Controller
{
    public function index()
    {
        // echo "Home/index";

        // Mengirimkan Data untuk judul halaman Home
        $data['judul'] = 'Home';



        $data['nama'] = $this->model('User_model')->getUser();
        // Memanggil Views
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
