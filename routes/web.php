<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/users','users.show')->name('users.all');
Route::view('/game','game.show')->name('game.show');
Route::get('/chat', 'ChatController@showChat')-> name('chat.show');
Route::post('/chat/message', 'ChatController@messageReceived')->name('chat.message');
Route::post('/chat/greet/{user}', 'ChatController@greetReceived')->name('chat.greet');