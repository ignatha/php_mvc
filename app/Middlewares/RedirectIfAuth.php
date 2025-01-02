<?php

namespace App\Middlewares;

class RedirectIfAuth extends Middleware
{
    public function handle($request,$next)
    {
        if (isset($_SESSION['user'])) {
            header('Location: /');
            exit;
        }

        $next();
    }

}