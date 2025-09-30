<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = ''){
        $model = new Model;
        $result = $model->delete(5);
        show($result);
        $this->view('home');
    }
}