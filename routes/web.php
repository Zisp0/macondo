<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [LoginController::class, 'show']);

Route::post('/', [LoginController::class, 'login']);

Route::get('/registro', function () {
    return view('registro');
});

Route::resource('/usuario', UsuarioController::class);

Route::get('/home', [HomeController::class, 'show']);

Route::post('/logout', [HomeController::class, 'logout']);