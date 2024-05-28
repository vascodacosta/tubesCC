<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;

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
    return view('Home', [ "title" => "Home"]);
});

Route::get('/Login', [LoginController::class, 'index']);

Route::get('/Sign-up', [RegisterController::class, 'index']);

Route::get('/Kursus', function () {
    return view('Kursus', ["title" => "Kursus"]);
});

Route::get('/Marketplace',[ProdukController::class,'index'])->name('showMarketPlace');
Route::get('/Marketplace/uploadProduk',[ProdukController::class,'showUploadProduct'])->name('showUploadProduk');

Route::post('/Marketplace/uploadProduk',[ProdukController::class,'store'])->name('UploadProduk');


Route::get('/Keranjang', function () {
    return view('Keranjang', ["title" => "Keranjang"]);
});


