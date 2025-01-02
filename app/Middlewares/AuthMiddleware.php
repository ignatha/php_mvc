<?php

namespace App\Middlewares;

class AuthMiddleware extends Middleware
{
    public function handle($request,$next)
    {
        // if (!isset($_SESSION['user'])) {
        //     header('Location: /login');
        //     exit;
        // }

        echo "AuthMiddleware sebelum response";

        $next();
    }

    public function terminate($request,$response)
    {
        echo "AuthMiddleware Dijalankan setelah response";
        $response();
    }



}