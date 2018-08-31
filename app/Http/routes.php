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

Route::get('/home', function () { return view('home'); });
Route::get('/', function () { return view('home'); });

Route::get('destinations', function () { return view('destinations'); });
Route::get('vessels', function () { return view('vessels'); });
Route::get('logistics', function () { return view('logistics'); });
Route::get('about', function () { return view('about'); });
Route::get('login', function () { return view('login'); });
Route::get('register', function () { return view('register'); });
Route::get('operator', function () { return view('operator'); });

Route::post('registeroperator', 'OperatorController@registerOperatorWithVessel');
Route::get('registeroperator', 'OperatorController@registerOperatorWithVessel');

Route::auth();

