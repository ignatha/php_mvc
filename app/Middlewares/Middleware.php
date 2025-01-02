<?php

namespace App\Middlewares;

class Middleware {
    public function handle($request,$next){
        $next();
    }

    public function terminate($request,$response)
    {
        $response();
    }
}