<?php

// Pagina Inicial
Route::get('/inicio', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});

// // Tela de Login
Auth::routes();
Route::get('/areaCliente', 'HomeController@index')->name('home');

// Paginas Site
Route::get('/{pg}/{id}', function ($pg,$id) {
    return view('site.'.$id);
});

// Administração
Route::get('/administracao/{id}', function ($id) {
    return view('administrar.'.$id);	
});

