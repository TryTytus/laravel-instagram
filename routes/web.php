<?php

use App\Http\Controllers\ChatsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostCotroller;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfileController;
use App\Models\Posts;
use Illuminate\Http\Client\Request;
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

Route::get(
    '/',
    [PostCotroller::class, 'getAll']
)->middleware(['auth']);


Route::view(
    '/create',
    'create_post',
    ['error' => false]
)->middleware(['auth']);

Route::post(
    '/create',
    [PostCotroller::class, 'store']
)->middleware(['auth']);

Route::get(
    'likes/{id}',
    [PostCotroller::class, 'likeById']
)->middleware(['auth']);

Route::get(
    'dislikes/{id}',
    [PostCotroller::class, 'dislikeById']
)->middleware(['auth']);

Route::get(
    'status/{id}',
    [LikesController::class, 'status']
)->middleware(['auth']);

Route::view('/messages', 'messages'
)->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/chats', [ChatsController::class, 'getAll']
)->middleware(['auth']);

Route::get('/chats/{id}', [ChatsController::class, 'index']
)->middleware(['auth']);


Route::post('/send', [MessagesController::class, 'store']
)->middleware(['auth']);

Route::get('/create_chat/{id}', [ChatsController::class, 'createChat']
)->middleware(['auth']);


Route::get('/profile/{nickname}', [ProfileController::class, 'index']
)->middleware(['auth']);

Route::get('/gallery', [PostCotroller::class, 'galleryPosts']
)->middleware(['auth']);

Route::get('/sendmes/{nickname}', [ChatsController::class, 'findByNick']
)->middleware(['auth']);

Route::get('thispost/{id}', [PostCotroller::class, 'getByIdWithComments']);

Route::post('comment/{post_id}', [CommentController::class, 'create']
)->middleware(['auth']);

require __DIR__ . '/auth.php';
