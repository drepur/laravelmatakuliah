<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\MatakuliahController;

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

/*Route::get('/', function () {
    return view('matakuliah');
})->name('matakuliah.index');*/

Route::get('/', [MatakuliahController::class,'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/hapus/{id}', [MatakuliahController::class,'hapus'])
    ->name('matakuliah.hapus');

Route::get('/matakuliah/tampil/{id}', [MatakuliahController::class,'tampil'])
    ->name('matakuliah.tampil');

Route::post('/matakuliah/simpan/',[MatakuliahController::class,'simpan'])
    ->name('matakuliah.simpan');

Route::post('/matakuliah/rubah/{id}', [MatakuliahController::class,'update'])
    ->name('matakuliah.update');