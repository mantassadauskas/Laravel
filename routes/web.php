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
app()->setLocale ('lt');

//Route::get ('/', function () {
//    return view ('welcome');
//});
use App\Task;

Route::get ('/tasks', 'TasksController@index');
Route::get ('/', 'TasksController@index');
Route::get ('/tasks/{task}', 'TasksController@show');

Route::get ('/', 'PostController@index');
Route::get ('/posts/create', 'PostController@create');
Route::post ('/posts', 'PostController@store');
//Route::get ('/{post}', 'PostController@show');

Auth::routes ();


//Route::get ('/home', 'HomeController@index')->name ('home');

//Route::get('radars', 'RadarsController');
Route::get ('radar', 'RadarsController@index');
Route::get ('radar/create', 'RadarsController@create');
Route::post ('radar', 'RadarsController@store');
Route::get ('radar/{radar}', 'RadarsController@show');
Route::get ('radar/{radar}/edit', 'RadarsController@edit');
Route::post ('radar/{radar}/update', 'RadarsController@update');
Route::get ('radar/{radar}/delete', 'RadarsController@delete');
Route::post ('radar/{radar}/destroy', 'RadarsController@destroy');

Route::get('driver', 'DriversController@index');
Route::get('driver/create', 'DriversController@create');
Route::post('driver', 'DriversController@store');
Route::get('driver/{driver}', 'DriversController@show');
Route::get('driver/{driver}/edit', 'DriversController@edit');
Route::post('driver/{driver}/update', 'DriversController@update');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::post('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');