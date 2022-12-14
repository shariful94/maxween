<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
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
Route::get('galleries', [GalleryController::class, 'home']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

//admin group
Route::middleware(['auth'])->group(function () {

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //product
    Route::resource('product',ProductController::class);
    Route::get('/changestatus', [ProductController::class, 'changestatus']);
    Route::post('updateproductstatus', [ProductController::class, 'updateproductstatus']);
    Route::get('export_product_pdf', [ProductController::class, 'export_product_pdf']);

    //gallery
    Route::resource('gallery',GalleryController::class);
    Route::post('imgdel', [GalleryController::class, 'imgDel']);

    //employee
    Route::resource('employee',EmployeeController::class);
});

require __DIR__.'/auth.php';
