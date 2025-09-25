<?php

class App
{
    private $controller = 'Home';
    private $method = 'index';

    private function split_URL(){
        $URL = isset($_GET["url"]) ? trim($_GET["url"], "/") : "home";
        $URL = explode("/", $URL);
        return $URL;
    }

    public function load_controller(){
        $URL = $this->split_URL();
        $file_name = "../app/controllers/".ucfirst($URL[0]).".php";

        if(file_exists($file_name)){
            require $file_name;
            $this->controller = ucfirst($URL[0]);
        }else{
            $file_name = "../app/controllers/_404.php";
            require $file_name;
            $this->controller = "_404";
        }

        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);
    }

}

