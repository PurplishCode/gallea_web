<?php

use App\Http\Controllers\FotoController;
use App\Http\Controllers\ShiftController;
use App\Models\Foto;
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

Route::get("/login", [ShiftController::class, "directLogin"])->middleware("guest");

Route::get('/', [ShiftController::class, "directGuest"]);
Route::get('/show/post', [FotoController::class, "create"]);
Route::post('post.gambar', [FotoController::class, "store"]);

