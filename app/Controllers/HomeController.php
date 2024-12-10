<?php

namespace App\Controllers;
use App\Cores\Views;

class HomeController {

    public function index()
    {
        $data = [
            'product' => 'Sepatu'
        ];

        echo Views::render('home.index',$data);
    }
}

