<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home','uses' => 'HomeController@index']);

Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);


//Login, logout, registro
Route::get('/login','LoginController@showLogin');
Route::post('/loginOK','LoginController@doLogin');
Route::get('/logout','LoginController@doLogout');
Route::get('/registro','RegisterController@showRegister');
Route::post('/registroSuccess','RegisterController@submitRegister');

Route::get('users/blog',[
    'uses' => 'UserPanelController@showBlog',
    'as' => 'blog',
]);
Route::post('users/blog',[
    'uses' => 'UserPanelController@showBlog',
    'as' => 'blog',
    ]);

Route::post('/commentSuccess','RegisterController@submitComment');

//Rutas de Login Usuario
Route::get('/users/personajes','UserPanelController@showCharacters');
Route::get('/users/imagenes','UserPanelController@showImages');
Route::get('/users/capitulos','UserPanelController@showChapters');
Route::get('/users/nuevoPost', 'UserPanelController@showSearch');

//Rutas de Login Admin
Route::get('/admin/', 'AdminPanelController@showIndex');
Route::get('/admin/listaPosteos', 'AdminPanelController@showPostsList');
Route::get('/admin/listaComentarios', 'AdminPanelController@showCommentsList');

//Rutas de Admin-Usuarios
Route::get('/admin/listaUsuarios', 'AdminPanelController@showUserList');
Route::get('/admin/editarUsuario/{id}','AdminPanelController@editUser');
Route::get('admin/eliminarUsuario/{id}','AdminPanelController@deleteUser');
Route::get('admin/eliminarPost/{id}','AdminPanelController@deletePost');
Route::get('admin/eliminarComment/{id}','AdminPanelController@deleteComment');
Route::get('/admin/nuevoUsuario','AdminPanelController@showNewUser');
Route::post('/admin/registroSuccess','RegisterController@submitUserRegister');
Route::put('/admin/registroSuccess','RegisterController@submitUserEdit');


//Rutas del manejo de Imagenes
Route::post('/users/postSuccess','ImageController@store');

// Rutas de Autenticacion

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);


Route::get('auth/logout', 'Auth\AuthController@getLogout');
