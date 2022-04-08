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

Route::get('/singlepage', function () {
    return view('singlepagetest');
})->name("singlepage");



Route::get('/trainers', function () {
    return view('trainers');
})->name("trainers");


Route::get('/oneimg', function () {
    return view('oneimg');
})->name("oneimg");


Route::get('/sginin', function () {
    return view('sginin');
})->name("sginin");


Route::get('/gamehome', function () {
    return view('/epicgames/homegame');
})->name("gamehome");

Route::get('/clipcss', function () {
    return view('clipcss');
})->name("clipcss");


Route::get('/store', function () {
    return view('store');
})->name("store");
