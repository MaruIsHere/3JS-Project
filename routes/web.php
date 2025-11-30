<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ProductController;

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

Route::get('/1', function () {
    return view('3D.acropora_cervicornis');
});

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/data', function () {
    return redirect()->route('data.index');
});


Route::resource('products', ProductController::class);

Route::resource('data', DataController::class);



