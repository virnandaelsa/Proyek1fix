<?php

use App\Http\Controllers\AhliGiziController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\KonsulController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PasienController;
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

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/ahli-gizi', [AhliGiziController::class, 'index'])
    ->name('ahli-gizi.index');
Route::get('/create-ahli-gizi', [AhliGiziController::class, 'create'])
    ->name('ahli-gizi.create');
Route::post('/store-ahli-gizi', [AhliGiziController::class, 'store'])
    ->name('ahli-gizi.store');
Route::get('/edit-ahli-gizi/{id}', [AhliGiziController::class, 'edit'])
    ->name('ahli-gizi.edit');
Route::post('/update-ahli-gizi/{id}', [AhliGiziController::class, 'update'])
    ->name('ahli-gizi.update');
Route::post('/delete-ahli-gizi/{id}', [AhliGiziController::class, 'destroy'])
    ->name('ahli-gizi.destroy');

Route::get('/chef', [ChefController::class, 'index'])
    ->name('chef.index');
Route::get('/create-chef', [ChefController::class, 'create'])
    ->name('chef.create');
Route::post('/store-chef', [ChefController::class, 'store'])
    ->name('chef.store');
Route::get('/edit-chef/{id}', [ChefController::class, 'edit'])
    ->name('chef.edit');
Route::post('/update-chef/{id}', [ChefController::class, 'update'])
    ->name('chef.update');
Route::post('/delete-chef/{id}', [ChefController::class, 'destroy'])
    ->name('chef.destroy');


Route::get('/pasien', [PasienController::class, 'index'])
    ->name('pasien.index');
Route::get('/create-pasien', [PasienController::class, 'create'])
    ->name('pasien.create');
Route::post('/store-pasien', [PasienController::class, 'store'])
    ->name('pasien.store');
Route::get('/edit-pasien/{id}', [PasienController::class, 'edit'])
    ->name('pasien.edit');
Route::post('/update-pasien/{id}', [PasienController::class, 'update'])
    ->name('pasien.update');
Route::post('/delete-pasien/{id}', [PasienController::class, 'destroy'])
    ->name('pasien.destroy');

Route::get('/makanan', [MakananController::class, 'index'])
    ->name('makanan.index');
Route::get('/create-makanan', [MakananController::class, 'create'])
    ->name('makanan.create');
Route::post('/store-makanan', [MakananController::class, 'store'])
    ->name('makanan.store');
Route::get('/edit-makanan/{id}', [MakananController::class, 'edit'])
    ->name('makanan.edit');
Route::post('/update-makanan/{id}', [MakananController::class, 'update'])
    ->name('makanan.update');
Route::post('/delete-makanan/{id}', [MakananController::class, 'destroy'])
    ->name('makanan.destroy');

Route::get('/konsul', [KonsulController::class, 'index'])
    ->name('konsul.index');
Route::get('/create-konsul', [KonsulController::class, 'create'])
    ->name('konsul.create');
Route::post('/store-konsul', [KonsulController::class, 'store'])
    ->name('konsul.store');
Route::get('/edit-konsul/{id}', [KonsulController::class, 'edit'])
    ->name('konsul.edit');
Route::post('/update-konsul/{id}', [KonsulController::class, 'update'])
    ->name('konsul.update');
Route::post('/delete-konsul/{id}', [KonsulController::class, 'destroy'])
    ->name('konsul.destroy');
