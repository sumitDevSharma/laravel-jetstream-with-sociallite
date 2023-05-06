<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FacebookController,TestController,ChatController, DashboardController, UserController};
Use Carbon\Carbon;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',    [DashboardController::class,'index'])->name('dashboard');
    Route::get('/user',         [UserController::class,'getUser'])->name('getUser');
    Route::get('/chat',         [ChatController::class,'index'])->name('chat');
    Route::get('/messege',      [ChatController::class,'get'])->name('getMessage');
    Route::post('/messege',     [ChatController::class,'send'])->name('sendMessage');
});

Route::get('/auth/facebook',    [FacebookController::class,'facebookLogin'])->name('facebookLogin');
Route::get('/auth/facebook/callback',[FacebookController::class,'facebookRedirect'])->name('facebookRedirect');
Route::get('/calculate',        [TestController::class,'calculate'])->name('calculate');








