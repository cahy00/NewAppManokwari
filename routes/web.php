<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/test', function(){
// 	return view('user-layouts.single-post');
// });
