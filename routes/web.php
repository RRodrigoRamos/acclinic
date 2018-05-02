<?php

// Pagina Inicial
Route::get('/inicio', function () {
    return view('home');
});

// Evento caso ao acessar ERRO 404
Event::listen('404', function()
{
	return 'ERRO';
});

// Grupos de Usuarios  
Route::group(['middleware' => 'admin'], function() {
	Route::get('/areaAdmin', 'AdminController@index');
	Route::get('/areaAdmin/login', 'AdminController@login');
	Route::post('/areaAdmin/login', 'AdminController@postLogin');
});

Route::group(['middleware' => 'web'], function() {
	Auth::routes();
	Route::get('/areaCliente','HomeController@index');
	Route::post('/areaCliente/home','UserController@painel');
	Route::post('/areaCliente/paciente','UserController@cadastroPaciente');
	Route::post('/areaCliente/convenio','UserController@cadastroConvenio');
	Route::post('/areaCliente/agendamento','UserController@agendamento');
	Route::post('/areaCliente/meusdados','UserController@painel');

// 	Route::get('lista-usuarios', 'UsuariosController@listaUsuario');
// Route::get('cria-usuario', 'UsuariosController@formularioUsuario');
// Route::post('salva-usuario', 'UsuariosController@salvarUsuario');
// Route::put('altera-usuario/{id}', 'UsuariosController@alteraUsuario');
// Route::get('editar-usuario/{id}', 'UsuariosController@editarUsuario');
// Route::delete('deletar-usuario/{id}', 'UsuariosController@deletarUsuario');
	Route::get('/', function () {
    	return view('home');
	});
});

// Grupos de Páginas
Route::group(array('prefix' => 'pagina'), function() {
	Route::get('{id}', function ($id) {
    	return view('site.'.$id);
	});
});

Route::group(array('prefix' => 'servico'), function() {
	Route::get('{id}', function ($id) {
    	return view('site.'.$id);
	});
});

// teste
// Route::get('/{pg}/{id}', function ($pg,$id) {
//     return view('site.'.$id);	
// });