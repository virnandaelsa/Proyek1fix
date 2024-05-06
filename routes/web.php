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

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('layouts/app');
});
Route::get('/lihatpengguna', function () {
    return view('admin/lihatpengguna');
});
Route::get('/tambahpasien', function () {
    return view('admin/modaltambahpasien');
});
Route::get('/editpasien', function () {
    return view('admin/modaleditpasien');
});
Route::get('/deletepasien', function () {
    return view('admin/modaldeletepasien');
});
Route::get('/lihatkonsul', function () {
    return view('admin/lihatkonsul');
});