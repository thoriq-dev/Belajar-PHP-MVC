<?php

class About
{
    public function index($nama = "thoriq", $pekerjaan = "mahasiswa")
    {
        echo "Method Default: Controller/About/Index";
        echo "</br>";
        echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo "Controllers/About/Method/Pages";
    }
}
