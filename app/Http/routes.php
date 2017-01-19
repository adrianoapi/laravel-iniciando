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


Route::group(['middleware' => ['web']], function() {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/foo', function () {
        return "Olá!";
    });

    Route::post('/foo', function () {
        return "Olá!";
    });

    Route::match(['get', 'post'], '/foo-post', function () {
        return "Olá!";
    });

    Route::any('/foo-all', function () {
        return "Olá!";
    });

    Route::get('/foo-methods', function () {
        return 'Olá $_GET!';
    });

    Route::post('/foo-methods', function () {
        return 'Olá $_POST!';
    });


    Route::get('/', function () {
        return "lista usuários";
    });
    
    Route::get('/add', function () {
        return "adicionar usuário";
    });
});
