<?php








// Rotas simples
Route::get('/', function () {
    return view('layout.template');
});

// Pagina Inicial
Route::get('/inicio', function () {
    return view('home');
});


// Tela de Login
Route::get('/exames', function () {
    return view('site.exame');
});
