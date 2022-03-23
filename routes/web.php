<?php

use App\Http\Controllers\RMControl;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [RMControl::class, 'index'])->name('index');

Route::post('/play-pause', [RMControl::class, 'playPause'])->name('playPause');
Route::post('/next', [RMControl::class, 'next'])->name('next');
Route::post('/previous', [RMControl::class, 'previous'])->name('previous');
Route::post('/mute', [RMControl::class, 'mute'])->name('mute');
Route::post('/volume-up', [RMControl::class, 'volumeUp'])->name('volumeUp');
Route::post('/colume-down', [RMControl::class, 'volumeDown'])->name('volumeDown');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
