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
Route::get('/', ['uses'=> 'Controller@Homepage']);
Route::get('/cadastro', ['uses'=> 'Controller@Cadastrar']);

//Rotas para loguin de usuario
Route::get('/log', ['uses'=> 'Controller@Log']);
Route::post('/log', ['as'=>'user.log', 'uses'=> 'Controller@log']);



