<?php

namespace App\Controllers;

class ProductController {

    public function index()
    {
        echo "Ini halaman product index";
    }

    public function edit($id)
    {
        echo "Ini halaman product dengan id {$id}";
    }
}

