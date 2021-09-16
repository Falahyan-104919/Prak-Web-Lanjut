<?php

namespace App\Controllers;

class PostController extends BaseController
{
    public function index()
    {
        $data = ["title"=>"blogs apps | post"];
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('v_post');
        echo view('layout/footer');
    }
}
