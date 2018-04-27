<?php

// Pagina Inicial
Route::get('/inicio', function () {
    return view('home');
});

// // Tela de Login
Auth::routes();
Route::get('/areaClinte', 'HomeController@index')->name('home');

// Paginas Site
Route::get('/{pg}/{id}', function ($id) {
    return view('site.'.$id);
});

// Administração
Route::get('administracao', function ($id) {
    return view('administrar.');
});

