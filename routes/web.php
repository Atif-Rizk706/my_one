<?php

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

Route::get('/',[\App\Http\Controllers\Homecontroller::class,"index"])->name('index');
Route::get('/home',[\App\Http\Controllers\Homecontroller::class,"redirect"])->middleware('auth','verified');;
Route::get('/custom-logout',[\App\Http\Controllers\Homecontroller::class,"customLogout"])->name('custom.logout')->middleware('auth');;
Route::get('/contact-us',[\App\Http\Controllers\Homecontroller::class,"contact"])->name('contact');
Route::get('/ourProducts',[\App\Http\Controllers\Homecontroller::class,"showProducts"])->name('ourProducts');
Route::get('/ourServices',[\App\Http\Controllers\Homecontroller::class,"showServices"])->name('showServices');
Route::get('/booking_now',[\App\Http\Controllers\Homecontroller::class,"Booking"])->name('Booking');
Route::get('/search', [\App\Http\Controllers\ProductController::class,"search"])->name('product.search');
// admin routes
Route::get('/controlPanel',[\App\Http\Controllers\Admincontroller::class,"controlPanel"])->name('controlPanel');
Route::get('/add_product', [\App\Http\Controllers\Admincontroller::class,"addProduct"])->name('add.product');
Route::post('/save-product',[\App\Http\Controllers\Admincontroller::class,"saveProduct"])->name('save.product');
Route::get('/add_services', [\App\Http\Controllers\Admincontroller::class,"addService"])->name('add.service');
Route::post('/save-services',[\App\Http\Controllers\Admincontroller::class,"saveService"])->name('save.service');
Route::get('/show_all_products',[\App\Http\Controllers\ProductController::class,"showProducts"])->name('show.products');
Route::post('/delete_product',[\App\Http\Controllers\ProductController::class,"deleteProduct"])->name("delete.product");

// Catch-all route for undefined routes
Route::get('/{any}', function () {
    return view('error');
})->where('any', '.*');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
