<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/products', [HomeController::class, 'product']);
Route::get('/item/{slug}', [HomeController::class, 'productdetails']);;

//admin group
Route::middleware(['auth'])->group(function () {

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //product
    Route::resource('product',ProductController::class);
    Route::get('/changestatus', [ProductController::class, 'changestatus']);

    //gallery
    Route::resource('gallery',GalleryController::class);
    Route::post('imgdel', [GalleryController::class, 'imgDel']);
    Route::get('galleries', [GalleryController::class, 'home']);
});

require __DIR__.'/auth.php';
