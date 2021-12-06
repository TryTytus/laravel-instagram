<?php

use App\Http\Controllers\PostCotroller;
use App\Http\Controllers\LikesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostCotroller::class, 'getAll'])->middleware(['auth']);


Route::view('/create', 'create_post', ['error' => false])->middleware(['auth']);
Route::post('/create', [PostCotroller::class, 'store'])->middleware(['auth']);

Route::get('likes/{id}', [PostCotroller::class, 'likeById'])->middleware(['auth']);
Route::get('dislikes/{id}', [PostCotroller::class, 'dislikeById'])->middleware(['auth']);
Route::get('status/{id}', [LikesController::class, 'status'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
