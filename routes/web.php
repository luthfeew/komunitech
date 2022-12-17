<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/k/{k_slug}', [CommunityController::class, 'show'])->name('community.show');
Route::get('/k/{k_slug}/post/{id}/{p_slug?}', [PostController::class, 'show'])->name('post.show');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
