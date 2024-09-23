<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();

        // Controller
        if (@file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }
        // Menjalankan Controller & Method serta kirimkan parameter jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], '/');
            // Membersihkan URL dari URL Injection
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Membersihkan atau menghilangkan / apabila hal tersebut di inputkan terakhir
            $url = explode('/', $url);
            return $url;
        }
    }
}
