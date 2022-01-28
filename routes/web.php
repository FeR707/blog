<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('blog.index');
})->name('inicio');

Route::get('/inicio', function () {
    $nombre = 'fernando';
    $apellido = 'manuel';
    $edad = '21';
    $elementos = ['Lavarel', 'PHP', 'JavaScript', 45,true,null,5.5];
    return view('hola', ['nombre'=> $nombre, 'apellido' => $apellido, 'edad' => $edad, 'elementos' => $elementos]);
})->name('hola');

Route::get('/saludo', function () {
    return view('saludo');
})->name('saludo');


Route::get('/index', function () {
    return view('blog.index');
})->name('index');

Route::get('/pagina2', function () {
    return view('blog.pagina2');
})->name('pagina2');

Route::get('/pagina3', function () {
    return view('blog.pagina3');
})->name('pagina3');
