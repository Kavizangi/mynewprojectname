<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'WelcomeController@index')->name('welcome');

Route::get('/community', 'communityController@index')->name('community');
Route::get('/events', 'eventsController@index')->name('events');
Route::get('/sell', 'sellController@index')->name('sell');
Route::get('/shop', 'shopController@index')->name('shop');

Route::get('/featured', 'featuredController@index')->name('featured');
Route::get('/released', 'releasedController@index')->name('released');
Route::get('/popular', 'popularController@index')->name('popular');
