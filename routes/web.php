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
Route::get('/about_karma', function () {
    return view('about_karma');
});
Route::get('/joining_procedure', function () {
    return view('joining_procedure');
});
Route::get('/what_we_offer', function () {
    return view('what_we_offer');
});
Route::get('/talk_to_us', function () {
    return view('talk_to_us');
});
Route::get('/make_application', function () {
    return view('make_application');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
