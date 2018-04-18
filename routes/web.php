<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::resource('emails', 'EmailController');
Route::resource('clientes', 'ClienteController');
Route::resource('listas', 'ListaController');