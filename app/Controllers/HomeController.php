<?php

namespace App\Controllers;
use App\Cores\Views;
use App\Models\User;

class HomeController {

    public function index()
    {

        $user = new User();

        $data = [
            'users' => $user->all()
        ];

        echo Views::render('home.index',$data);
    }
}

