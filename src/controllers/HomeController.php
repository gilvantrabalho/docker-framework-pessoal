<?php

class HomeController extends Controller
{

    public function index()
    {
        $this->view('layout/header/default');
        $this->view('home');
        $this->view('layout/footer/default');
    }

    public function pegar()
    {
        echo 'pegou';
    }
}
