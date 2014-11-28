<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home');
});
Route::get('/about', function()
{
	return View::make('pages.about');
});

// Route::get('/contact', function()
// {
// 	return View::make('pages.contact');
// });
Route::get('adverts', function(){
	return "Advert";
});

Route::get('account', 'AuthController@account');
//definig the registration process
Route::get('signup', ['as' => 'signup', 'uses'=> 'AuthController@signupPage']);
// Create Account Route
Route::post('signup', ['as' => 'advertisments', 'uses' => 'AuthController@signup']);
// Sign In Route
Route::get('signin', ['as' => 'signin', 'uses'=> 'AuthController@loginPage']);
// Login Route
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);
// Logout
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
//mailing
Route::get('sendEmail', ['as' => 'sendEmail', 'uses' => 'AuthController@sendEmail']);
// Route::get('advertisments', array('uses' => 'PageController@advertisments'));
Route::get('advertisments', ['as' => 'advertisments', 'uses'=> 'PageController@advertisments']);

//mailing routes defined here
// Route::get('/', 'MailController@sendEmail');sendEmail
// Route::get('/contact', function()
// {
// 	return View::make('contacts.create');
// 	$contact = new Contact;
// 	$contact->name = Input::get('name');
// 	$contact->occupation = Input::get('occupation');
// 	$contact->telephone = Input::get('telephone');
// 	$contact->message = Input::get('message');
// 	$contact->password = Hash::make(Input::get('password'));
// 	$contact->save();

// 	return Redirect::route('contact.create')->with('message','Your message have been received thatnkyou');
// });
 Route::resource ('contact','MessageController');

<<<<<<< HEAD
 // Route::post('index', ['as' => 'index', 'uses' => 'MessageController@index']);
 // Route::get('index', ['as' => 'index', 'uses' => 'MessageController@index']);

 //Route::get('contact', 'MessageController@create');
 //Route::post('contact', 'MessageController@create');
 //Route::get('contact', 'MessageController@store');
=======
 Route::get('contact', 'MessageController@create');
 Route::get('contact', 'MessageController@store');
>>>>>>> 526703063e0ee035cf6be56096a639f2a4780e0f
