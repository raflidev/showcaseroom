<?php

use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\UserController;
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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/addcar', function () {
    return view('addcar');
});

Route::post('/registrasi', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/addcar', [ShowroomController::class, 'store']);

