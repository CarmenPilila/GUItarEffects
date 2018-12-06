<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->view('/', 'welcome');

$router->post('/effect/{effect}/update', 'Controller@update');
$router->post('/effect/{effect}/start', 'Controller@start');
$router->post('/effect/{effect}/stop', 'Controller@stop');
