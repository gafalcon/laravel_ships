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

Route::get('/', function () {
    $page_title = "Home";
    return view('index', compact('page_title'));
});

Route::resources([
    'embarcacion' => 'EmbarcacionController',
    'capitan' => 'CapitanController',
    'zarpe' => 'ZarpeController',
    'lance' => 'LanceController'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
