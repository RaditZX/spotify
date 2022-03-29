<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PlaylistController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/list',[MusicController::class,'index']);
Route::get('/add',[MusicController::class,'create']);
Route::get('/edit/{id}',[MusicController::class,'edit']);
Route::get('/delete/{id}',[MusicController::class,'destroy']);
Route::get('/detail/{id}',[MusicController::class,'show']);
Route::resource('music',MusicController::class);


Route::get('/playlist',[PlaylistController::class,'index']);
Route::get('/playlistadd',[PlaylistController::class,'create']);
Route::get('/playlistdetail/{id}',[PlaylistController::class,'show']);
Route::resource('playlists',PlaylistController::class);
require __DIR__.'/auth.php';
