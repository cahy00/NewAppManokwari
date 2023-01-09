<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminpostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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


//!route postingan untuk user
Route::get('/', [PostController::class, 'index']);
Route::get('/post/show/{Post:slug}', [PostController::class, 'show']);

//?route category untuk user
Route::get('/category/show/{Category:slug}', [CategoryController::class, 'show']);

//?route login 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);



//?Route Dashboard
Route::get('/dashboard', function(){
	return view('dashboard.index');
});

//!route postingan untuk admin
Route::get('/admin/post', [AdminpostController::class, 'index']);
Route::get('/admin/post/show/{id}', [AdminpostController::class, 'show']);
Route::get('/admin/create', [AdminpostController::class, 'create']);
// Route::get('/admin/post/show/{Post:slug}', [PostController::class, 'show']);



//?Route group
Route::middleware(['auth'])->group(function(){
	
	

});
// Route::get('/test', function(){
// 	return view('user-layouts.single-post');
// });
