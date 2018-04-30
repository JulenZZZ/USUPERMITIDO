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

Route::get('/', function () {
    return view('inicio');
});

Route::post('usuariospermitidos','UsuPermitidos@showIndex');

Route::get('/permiso', function () {
    return view('permiso');
});

Route::get('/sinpermiso', function () {
    return view('sinpermiso');
});
