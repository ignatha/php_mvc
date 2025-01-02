<?php
namespace App;

use App\Cores\Routes;
use App\Middlewares\{AuthMiddleware,RedirectIfAuth};

$route = new Routes();

$route->get('/','HomeController@index',[AuthMiddleware::class]);
$route->get('/add','HomeController@add',[AuthMiddleware::class]);
$route->post('/add','HomeController@store',[AuthMiddleware::class]);
$route->get('/edit/{id}','HomeController@edit',[AuthMiddleware::class]);
$route->post('/update/{id}','HomeController@update',[AuthMiddleware::class]);
$route->post('/delete/{id}','HomeController@delete',[AuthMiddleware::class]);

$route->get('/login','AuthController@login',[RedirectIfAuth::class]);
$route->post('/login','AuthController@loginStore',[RedirectIfAuth::class]);

$route->run();