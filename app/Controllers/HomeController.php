<?php

namespace App\Controllers;
use App\Cores\{Views,Validate, Flash};
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

        $validator = new Validate();

        $validator->validate($data,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors() as $filed => $messages) {
                foreach ($messages as $message) {
                    Flash::set("error_{$filed}",$message);
                }
            }

            header('Location: /add');
            exit;
        }

        $simpan = $user->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        if ($simpan) {
            header('Location: /');
            exit;
        }

        header('Location: /add');
        exit;
    }

    public function edit($id)
    {
        $user = new User();
        $getUser = $user->find($id);

        if (!$getUser) {
            echo 'user tidak ditemukan';
            exit;
        }

        echo Views::render('home.edit',[
            'user' => $getUser
        ]);
    }

    public function update($id)
    {
        $data = $_POST;
        $user = new User();

        $simpan = $user->update($id,[
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        if ($simpan) {
            header('Location: /');
            exit;
        }

        echo "Gagal disimpan";
        exit;
    }

    public function delete($id)
    {
        $user = new User();
        $hapus = $user->delete($id);

        if ($hapus) {
            header('Location: /');
            exit;
        }

        echo "Gagal dihapus";
        exit;
    }
}

