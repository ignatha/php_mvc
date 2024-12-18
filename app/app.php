<?php
namespace App;

use App\Cores\Routes;

$route = new Routes();

$route->get('/','HomeController@index');
$route->get('/add','HomeController@add');
$route->post('/add','HomeController@store');
$route->get('/edit/{id}','HomeController@edit');
$route->post('/update/{id}','HomeController@update');
$route->post('/delete/{id}','HomeController@delete');

$route->run();
