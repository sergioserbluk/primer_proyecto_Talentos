<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/home_view');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function acerca_de()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function registro()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registro');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function principal()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/home_view');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    
}
