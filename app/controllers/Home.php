<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = ''){
        $user = new User;
        $arr["name"] = "Fathella";
        $arr["age"] = 28;
        $result = $user->insert($arr);
        $this->view('home');
    }
}