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

    public function add()
    {
        echo Views::render('home.add');
    }

    public function store()
    {
        $user = new User();

        $data = $_POST;

        $simpan = $user->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        if ($simpan) {
            header('Location: /');
            exit;
        }

        echo "Gagal disimpan";
        exit;
    }

    public function edit($id)
    {
        echo Views::render('home.edit');
    }
}

