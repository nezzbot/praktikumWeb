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
use App\Http\Controllers\BookController;
use App\Http\Controllers\InventController;
use App\Http\Controllers\InventryController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Inventory;

Route::get('/', [MahasiswaController::class, 'index']); // Menetapkan rute root langsung ke 'books.index'
Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/main', function () {
    return view('mahasiswa/main');
});

Route::get('/helpdesk', function () {
    return view('mahasiswa/helpDesk');
});


Route::get('/queue', function () {
    return view('mahasiswa/queueMessage');
});


Route::get('/reply', function () {
    return view('mahasiswa/reply');
});