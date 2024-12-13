<?php
namespace App;

use App\Cores\Routes;

$route = new Routes();

$route->get('/','HomeController@index');
$route->get('/product','ProductController@index');
$route->post('/product','ProductController@add');
$route->get('/product/{id}','ProductController@edit');

$route->run();
