<?php

use App\Profession;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('character', 'CharacterController');

// JSON Requests
Route::get('/get_spells/{profession}', function(Profession $profession) {
    return App\Spell::where(strtolower($profession->name), 1)->get();
});
Route::get('/get_profession/{profession}', function(Profession $profession) {
    return Profession::where('id', $profession->id)->first();
});