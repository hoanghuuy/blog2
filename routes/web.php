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

Route::get('user', function () {
    // return view('welcome');
    return "User";
});

Route::get('user2', function () {
    // return view('welcome');
    return "User222";
});

Route::get('user3545454', function () {
    // return view('welcome');
    return "User22233333545454";
});


Route::get('user8', function () {
    // return view('welcome');
    return "User8";
});