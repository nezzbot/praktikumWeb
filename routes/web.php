<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/helpdesk', function () {
    return view('helpDesk');
});

Route::get('/queue', function () {
    return view('queueMessage');
});

Route::get('/reply', function () {
    return view('reply');
});


Route::get('/proses', function () {
    return view('proses');
});