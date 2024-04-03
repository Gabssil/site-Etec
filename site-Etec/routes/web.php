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
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/departamento', function () {
    return view('departamento');
});

Route::get('/oportunidades', function () {
    return view('oportunidades');
});

Route::get('/vestibulinho', function () {
    return view('vestibulinho');
});

Route::get('/instituicao', function () {
    return view('instituicao');
});

