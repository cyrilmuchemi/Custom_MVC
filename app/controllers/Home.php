<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = ''){
        $model = new Model;
        $arr["name"] = "Mary";
        $arr["age"] = 55;
        $result = $model->update(2, $arr);
        show($result);
        $this->view('home');
    }
}