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
    return view('home');
})->name('home');

Route::get('/step-two', function () {
    return view('steps.two');
})->name('stepTwo');
Route::get('/step-three', function () {
    return view('steps.three');
})->name('stepThree');
Route::get('/step-four', function () {
    return view('steps.four');
})->name('stepFour');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
