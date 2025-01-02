<?php

namespace App\Controllers;
use App\Cores\{Views,Validate, Flash};
use App\Models\User;

class AuthController {

    public function login()
    {
        echo Views::render('auth.login');
    }

}

