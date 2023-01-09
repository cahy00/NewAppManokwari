<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [LoginController::class, 'create']);
Route::post('/register', [LoginController::class, 'store']);

//?Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);


// Route::get('/test', function(){
// 	return view('user-layouts.single-post');
// });
