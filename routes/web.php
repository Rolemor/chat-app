<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;

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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/chat', function () {
    return Inertia::render('Chat/container');
})->name('chat');

Route::middleware(['auth:sanctum', 'verified'])->get('/friends', function () {
    return Inertia::render('FriendRequest/container');
})->name('friends');

Route::middleware(['auth:sanctum', 'verified'])->get('/search', function () {
    return Inertia::render('UserSearch/container');
})->name('search');

Route::middleware('auth:sanctum')->get('/getUserInfo', [UserController::class, 'getUserInfo']);

Route::middleware('auth:sanctum')->get('/chat/rooms', [ChatController::class, 'rooms']);
Route::middleware('auth:sanctum')->get('/chat/room/{roomId}/messages', [ChatController::class, 'messages']);
Route::middleware('auth:sanctum')->post('/chat/room/{roomId}/message', [ChatController::class, 'newMessage']);

Route::middleware('auth:sanctum')->get('/addFriendRequest/{id}', [UserController::class, 'addFriendRequest']);
Route::middleware('auth:sanctum')->get('/removeFriendRequest/{id}', [UserController::class, 'removeFriendRequest']);
Route::middleware('auth:sanctum')->get('/removeFriendRequestOf/{id}', [UserController::class, 'removeFriendRequestOf']);
Route::middleware('auth:sanctum')->get('/acceptFriendRequest/{id}', [UserController::class, 'acceptFriendRequest']);

Route::middleware('auth:sanctum')->get('/getFriendRequests', [UserController::class, 'getFriendRequests']);
Route::middleware('auth:sanctum')->get('/getFriendRequestsOf', [UserController::class, 'getFriendRequestsOf']);

Route::middleware('auth:sanctum')->get('/toggleFriend/{id}', [UserController::class, 'toggleFriend']);
Route::middleware('auth:sanctum')->get('/getFriends', [UserController::class, 'getFriends']);
