<?php

class App
{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if (@isset($_GET["url"])) {
            $url = rtrim($_GET["url"], '/');
            // Membersihkan URL dari URL Injection
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Membersihkan atau menghilangkan / apabila hal tersebut di inputkan terakhir
            $url = explode('/', $url);
            return $url;
        }
    }
}
