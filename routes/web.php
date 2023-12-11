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
    return view('welcome');
});
Route::get('/candidats', function () {
    return view('welcome');
});
Route::get('/programmes', function () {
    return view('welcome');
});
Route::get('/electeurs', function () {
    return view('welcome');
});
Route::get('/secteurs', function () {
    return view('welcome');
});
