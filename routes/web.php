<?php

use App\Profession;
use App\Race;
use App\Alignment;
use App\Background;
use App\StartingArmor;
use App\Equipment;
use App\ProfessionEquipment;
use App\Language;
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
Route::get('/get_race/{race}', function(Race $race) {
    return Race::where('id', $race->id)->first();
});
Route::get('/get_alignment/{alignment}', function(Alignment $alignment) {
    return Alignment::where('id', $alignment->id)->first();
});
Route::get('/get_background/{background}', function(Background $background) {
    return Background::where('id', $background->id)->first();
});
Route::get('/get_profession_armor/{profession}', function(Profession $profession) {
    $profession = Profession::where('id', $profession->id)->first();
    return StartingArmor::where(tableCase($profession->name), 1)->get();
});
Route::get('/get_profession_equipment/{profession}', function(Profession $profession) {
    $profession = Profession::where('id', $profession->id)->first();
    $equipmentOptions = $profession->professionEquipment()->get();
    return [$equipmentOptions[count($equipmentOptions) - 1]->option_set, $equipmentOptions];
});
Route::get('/get_equipment', function() {
    return Equipment::all();
});
Route::get('/get_languages', function() {
    return Language::all();
});