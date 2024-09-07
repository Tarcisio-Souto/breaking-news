<?php

use App\Livewire\EditarNoticia;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\OpenNews;
use App\Livewire\Postar;
use App\Livewire\Update;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('/');

Route::group(['middleware'=>'auth'], function() {

    Route::get('/postar', Postar::class)->name('postar');
    Route::get('/editar/{id}', EditarNoticia::class)->name('editar');

});

Route::get('/login', Login::class)->name('login');
Route::get('/logout', Logout::class)->name('logout');
Route::get('/open-news/{id}', OpenNews::class)->name('open-news');



