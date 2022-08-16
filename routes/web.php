<?php

use App\Http\Controllers\Mp3Controller;
use App\Http\Controllers\PostMusicController;
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

Route::get('Music_page',[PostMusicController::class,'index']);
Route::post('post-music',[PostMusicController::class,'post']);
Route::get('view-musics',[PostMusicController::class,'viewMusic'])->name('show');
