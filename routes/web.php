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

Route::get('/', 'GoogleSheetsController@getAllRows')->name('home');

Route::post('add-row', 'GoogleSheetsController@addRow')->name('add-row');
//Route::get('/', function () {
//    return view('welcome');
//});
