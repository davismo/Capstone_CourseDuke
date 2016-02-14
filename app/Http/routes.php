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

/*
	Home Page
 */

/*
Route::get('/', 'Auth\AuthController@getLogin');

Route::get('/', 'Pagescontroller@home');
*/

/**/
Route::get('/', function(){
	if(Auth::guest()){
		return Redirect::to('auth/login');
	} else {
		return Redirect::to('profile');
	}
});

/*
	Contact Page
*/

Route::get('contact', 'PagesController@contact');	

/*
	About Page
 */

Route::get('about', 'PagesController@about');

/*
	Profile Page
 */

Route::get('profile', 'PagesController@profile');


Route::get('user/{id}', function($id)
{
	$user = App\User::find($id);
	echo 'The user with ID of' . $id . 'has an email of: ' . $user->email;
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);