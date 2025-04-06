<?php

use Illuminate\Support\Facades\Auth; // เพิ่มบรรทัดนี้
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
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
// Admin
Route::get('/',[BlogController::class,'index']); // สร้าง route หน้าแรก 
route::prefix('author')->group(function(){ 
        Route::get('/blog',[AdminController::class,'blog'])->name('blog');
        Route::get('/about',[AdminController::class,'about']);
        Route::get('/create',[AdminController::class,'create']);
        
        Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
        Route::get('changeStatus/{id}',[AdminController::class,'changeStatus'])->name('changeStatus');
        Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
        
        Route::post('/insert',[AdminController::class,'insert']);
        Route::post('update/{id}',[AdminController::class,'update'])->name('update');
});

//user
Route::get('/detail/{id}',[BlogController::class,'detail'])->name('detail');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
