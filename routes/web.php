<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;

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
    return view('welcome');
});

Route::get('/viewtransaksi', [TransaksiController::class,'index']);

Route::get('/transaksi', [TransaksiController::class,'view']);
Route::post('/transaksi/post', [TransaksiController::class,'post']);
Route::get('/transaksi/add', [TransaksiController::class,'add']);
Route::post('/transaksi/create', [TransaksiController::class,'create']);
// Route::get('/transaksi/edit/{id}', [TransaksiController::class,'edit']);
// Route::post('/transaksi/update/{id}', [TransaksiController::class,'update']);

Route::post('/transaksi/selesai/{id}', [TransaksiController::class,'selesai']);
Route::post('/update-transaksi/{id}', [TransaksiController::class,'update_transaksi']);



// Route::get('/transaksi/{id}', [TransaksiController::class,'transaksi']);
// Route::get('viewtransaksi', [TransaksiController::class,'view']);

