<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MensajesChatController;
use App\Http\Controllers\PublicacionController;

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

Route::get('/chat/with/{usuario}', [ChatController::class, 'chatWith']);

Route::get('/chat/{chat}', [ChatController::class, 'show']);

Route::post('message/sent', [MensajesChatController::class, 'sent']);

Route::get('message/get/{idChat}', [MensajesChatController::class, 'get']);

Route::get('message/get/last/{idChat}/{ultimo}', [MensajesChatController::class, 'last']);

Route::post('/publicar', [PunlicacionController::class, 'postear']);

Route::get('/cargar', [PunlicacionController::class, 'cargar']);