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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/content-manager', 'ContentController@index')->name('Content-manager');
//Route::resource('content', 'ContentController'); ПЕРЕИМЕНУЙ. СЛЕТАЮТ РОУТЫ ПАПКИ /content !!!

Route::resources([
    'content/home/page' => 'content\home\PageController',
]);