<?php

namespace App\Controllers;

use App\Cores\Views;

class ProductController {

    public function index()
    {
        $data = [
            'product' => 'Sepatu'
        ];

        echo Views::render('product.index',$data);
    }

    public function edit($id)
    {
        echo "Ini halaman product dengan id {$id}";
    }
}

