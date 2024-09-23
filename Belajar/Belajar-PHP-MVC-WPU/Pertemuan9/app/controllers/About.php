<?php

class About extends Controller
{
    public function index($nama = "thoriq", $pekerjaan = "mahasiswa", $umur = 23)
    {
        // echo "Method Default: Controller/About/Index";
        // echo "</br>";
        // echo "Halo nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";


        // Mengirimkan data ke Controller Utama
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';




        // Method untuk memanggil View

        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer",);
    }
    public function page()
    {
        // Mengirimkan Data judul untuk method page
        $data['judul'] = 'Pages';

        // echo "Controllers/About/Method/Pages";
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}
