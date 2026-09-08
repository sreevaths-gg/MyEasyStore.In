<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyEasyStoreController;
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


Route::get('/myeasystore.in', [MyEasyStoreController::class, 'index']);
Route::get('/myeasystore.in/checkout', [MyEasyStoreController::class, 'showForm'])->name('store.form');
Route::post('/myeasystore.in/checkout', [MyEasyStoreController::class, 'store'])->name('store.create');
Route::get('/myeasystore.in/about', [MyEasyStoreController::class, 'about'])->name('store.about');
Route::get('/myeasystore.in/features', [MyEasyStoreController::class, 'features'])->name('store.features');
