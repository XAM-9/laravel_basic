<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/blog',[AdminController::class,'blog']);
Route::get('/about',[AdminController::class,'about']);
Route::get('/create',[AdminController::class,'create']);

Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::get('changeStatus/{id}',[AdminController::class,'changeStatus'])->name('changeStatus');
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');


Route::post('/insert',[AdminController::class,'insert']);
Route::post('update/{id}',[AdminController::class,'update'])->name('update');




