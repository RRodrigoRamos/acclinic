<?php

// Pagina Inicial
Route::get('/inicio', function () {
    return view('home');
});

// Grupos de Páginas
Route::prefix('pagina')->group( function() {
	Route::get('{id}', function ($id) {
    	return view('site.'.$id);
	});
});


// 	Route::get('{id}', function ($id) {
//     	return view('site.'.$id);
// 	});
// });

// Evento caso ao acessar ERRO 404
Event::listen('404', function()
{
	return 'ERRO';
});

// Rotas Administrativas.  
Route::middleware(['admin'])->group ( function() {
	Route::get('/areaAdmin', 'AdminController@index');
	Route::get('/areaAdmin/login', 'AdminController@login');
	Route::post('/areaAdmin/login', 'AdminController@postLogin');
});
Route::prefix('admin')->group( function() {
// Rotas de Login...
    Route::get('login',['as' => 'admin.login','uses' => 'AdminAuth\loginController@showLoginForm']);
    Route::post('login',['uses' => 'AdminAuth\loginController@Login']);
    Route::post('logout',['as' => 'admin.logout','uses' => 'AdminAuth\loginController@Logout']);
// Rotas de registro Admin...
    Route::get('register',['as' => 'admin.register','uses' => 'AdminAuth\RegisterController@showRegistrationForm']);
    Route::post('register',['uses' => 'AdminAuth\RegisterController@register']);
// Passw/R Routes...
    Route::get('password/reset',['as' => 'admin.password.reset','uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email',['as' => 'admin.password.email','uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
	Route::get('password/reset/{token}',['as' => 'admin.password.reset.token','uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
	Route::post('password/reset',['uses' => 'AdminAuth\ResetPasswordController@reset']);

});

// Rotas do Cliente 
Route::middleware(['web'])->group (function() {
	Auth::routes();
	Route::get('/areaCliente','UserController@index');
	Route::post('/areaCliente/home','UserController@painel');
	Route::post('/areaCliente/paciente','UserController@cadastroPaciente');
	Route::post('/areaCliente/convenio','UserController@cadastroConvenio');
	Route::post('/areaCliente/agendamento','UserController@agendamento');
	Route::post('/areaCliente/meusdados','UserController@painel');

// 	Route::get('lista-usuarios', 'UsuariosController@listaUsuario');
// Route::get('cria-usuario', 'UsuariosController@formularioUsuario');
// Route::post('salva-usuario', 'UsuariosController@salvarUsuario');
// Route::put('altera-usuario/{id}', 'UsuariosController@alteraUsuario');
// 
// Route::get('editar-usuario/{id}', 'UsuariosController@editarUsuario');
// Route::delete('deletar-usuario/{id}', 'UsuariosController@deletarUsuario');
	Route::get('/', function () {
    	return view('home');
	});
});