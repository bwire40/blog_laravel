<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


// routes
Route::get("/", [GuestController::class, "index"])->name("home");
Route::get("/shop", [GuestController::class, 'shop'])->name('shop');
Route::get("/about", [GuestController::class, 'about'])->name('about');
Route::get("/contact", [GuestController::class, 'contact'])->name('contact');


// posts
Route::get('/posts', [PostController::class, "index"])->name("posts");
Route::get('/posts/create', [PostController::class, "create"])->name("posts.create");
