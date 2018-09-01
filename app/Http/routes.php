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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');


Route::get('destinations', function () { return view('destinations'); });
Route::get('logistics', function () { return view('logistics'); });
Route::get('excursion', function () { return view('excursion'); });
Route::get('about', function () { return view('about'); });
// Route::get('login', function () { return view('login'); });
// Route::get('register', function () { return view('register'); });

// Users
Route::get('registerUser', 'RegistrationController@create');
Route::post('registerUser', 'RegistrationController@store');

Route::get('loginUser', 'SessionsController@create');


// Route::get('operator', function () {  });

Route::get('vessels', 'VesselsController@index');
Route::get('followme', 'VesselsController@track');

Route::post('message', 'MessagesController@contact');

Route::post('booking', 'TicketsController@booking');

Route::post('hire', 'HireController@hire');


//operator links
Route::get('operator', 'OperatorController@index');
Route::post('registeroperator', 'OperatorController@registerOperatorWithVessel');
Route::get('registeroperator', 'OperatorController@registerOperatorWithVessel');

Route::group(['prefix' => 'operator'], function () {
	Route::get('login', 'OperatorAuthController@index');
	Route::post('login', 'OperatorAuthController@doLogin');

	Route::get('dashboard', 'OperatorController@dashboard');

	Route::get('vessels', 'VesselsController@indexAdmin');
	Route::post('vessels/create', 'VesselsController@create');
	Route::get('vessels/get', 'VesselsController@get');
	Route::post('vessels/update', 'VesselsController@update');
	Route::post('vessels/updateimage', 'VesselsController@updateImage');
	Route::get('vessels/delete', 'VesselsController@destroy');
	Route::get('vessels/toggle', 'VesselsController@toggle');

	Route::get('schedule', 'SchedulesController@indexAdmin');
	Route::post('schedule/create', 'SchedulesController@create');
	Route::get('schedule/delete', 'SchedulesController@destroy');
	Route::get('schedule/getroutes', 'SchedulesController@getRoutes');
	Route::post('schedule/createroute', 'SchedulesController@createRoute');
	Route::get('schedule/deleteroute', 'SchedulesController@destroyRoute');

	Route::get('messages', 'MessagesController@indexAdmin');

	Route::get('tickets', 'TicketsController@indexAdmin');
	Route::get('tickets/approve', 'TicketsController@approveTicket');
	Route::get('tickets/paid', 'TicketsController@markPaid');

	Route::get('hire', 'HireController@indexAdmin');
	Route::get('hire/approve', 'HireController@approveTicket');
	Route::get('hire/paid', 'HireController@markPaid');

});

Route::auth();

