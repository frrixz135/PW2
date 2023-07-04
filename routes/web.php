<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\tokocontroller;



route::prefix('toko')->group(function(){


    route::get('/',
        [tokocontroller::class, 'index']);

    route::get('/detail',
        [tokocontroller::class, 'detail']);

    route::get('/about',
        [tokocontroller::class, 'about']);

    route::group(['middleware' => ['auth']], function(){

    route::get('/admin',
        [tokocontroller::class, 'admin'])->name('produk.admin');

    route::get('/admin',
        [tokocontroller::class, 'admin'])->name('produk.admin');

    route::get('/create',
        [tokocontroller::class, 'create'])->name('product.create');

    route::post('/',
        [tokocontroller::class, 'store'])->name('product.store');
    });


    
    
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
