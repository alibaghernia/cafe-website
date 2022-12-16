<?php

use App\Http\Controllers\TelegramController;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Events;
use App\Http\Livewire\Home;
use App\Http\Livewire\Menu;
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

Route::get('/', Home::class)
    ->name('home');

Route::get('events', Events::class)
    ->name('events');

Route::get('blog', Blog::class)
    ->name('blog');

