<?php

use App\Http\Controllers\ProdukController;
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
    return view('.AdminLTE/dashboard');
});


Route::get("/master", function () {
    return view('.AdminLTE/TemplateMaster');
});


Route::get("/product/add", function () {
    return view('.balajar_database/tambah_produk');
})->name('createProduct');


Route::get("/product", [ProdukController::class, 'index']);

Route::get("/product/delete/{id}", [ProdukController::class, 'destroy'])->name('deleteProduct');
