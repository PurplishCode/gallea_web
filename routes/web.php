<?php

use App\Http\Controllers\AlbumController;
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


Route::middleware("redirectIfAuth")->group(function(){
  Route::get('/', [ShiftController::class, "welcome"]);
    Route::get("/login", [ShiftController::class, "directLogin"])->name("login.display");
    Route::get("/register", [ShiftController::class, "show"])->name("register");

});

  Route::middleware("auth")->group(function(){
    Route::get("/home", [FotoController::class, "index"])->name("home");
    Route::get("/table-data", [ShiftController::class, "listData"])->name("showdata");
    Route::get("/home/album", [AlbumController::class, "index"])->name("home.album");  
  Route::get('/album/create', [AlbumController::class, "create"])->name("create.album");

  Route::get('/foto/create', [FotoController::class, "create"])->name("create.gallery");

  Route::get('/album/{albumID}/foto', [AlbumController::class, "showPhotos"])->name('albums.showPhotos');
   });

Route::post("login", [ShiftController::class, "login"])->name("login");

Route::post("register", [ShiftController::class, "register"])->name("register");

Route::post("logout", [ShiftController::class, "logout"])->name("logout");

Route::get('/layout-sidenav', function () {
    return view('layout.sidenav');
});

Route::post('post-album', [AlbumController::class, "store"])->name('post.album');

Route::post('post-gambar', [FotoController::class, "store"])->name('post-gambar');


Route::get('/bootstrap', function()
{
 return view('bootstraplearn')->with("title", "Bootstrap Playground"); 
})->middleware('auth');


Route::get('/home/settings', function()
{
  return view("layout.settings")->with("title", "UDC | Settings Page");
})->middleware("auth")->name('logoutPath');

Route::delete('/foto/${fotoID}', [FotoController::class, "destroy"])->name('foto.destroy');

Route::put('/foto/{fotoID}', [FotoController::class, "edit"])->name("edit.foto")->middleware("auth");
// Route::get("/login", [ShiftController::class, "directLogin"])->middleware("guest");

// Route::get('/', [ShiftController::class, "directGuest"]);
// Route::get('/show/post', [FotoController::class, "create"]);
// Route::post('post.gambar', [FotoController::class, "store"]);
// Route::get('/table-user', [ShiftController::class, "listData"]);

// Route::post('login', [ShiftController::class, "login"])->name("login");

// Route::get('/register', [ShiftController::class, "show"])->middleware("guest");

// Route::post('register', [ShiftController::class, "register"])->name("register");

// Route::get('/list-gallery', [FotoController::class, "index"])->name("list-gallery");

// Route::get("/layout-sidenav", function()
// {
// return view('layout.sidenav');
// });

// Route::get('logout', [ShiftController::class, "logout"])->name("logout");