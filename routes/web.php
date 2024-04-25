<?php

use App\Http\Controllers\ImgController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\GallaryImage;

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
    $data = GallaryImage::all();
    return view ('welcome', compact('data'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/image-store', [App\Http\Controllers\ImgController::class, 'storeImage'])->name('image-store');
Route::get('/detail/{id}', [App\Http\Controllers\ImgController::class, 'detailImage'])->name('detail');
Route::delete('/destroy/{image}', [App\Http\Controllers\ImgController::class, 'destroy'])->name('destroy');
Route::resource('/images', ImgController::class);
