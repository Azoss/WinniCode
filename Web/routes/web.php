<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', \App\Livewire\Home::class)->name('home');

Route::get('/about', \App\Livewire\About::class)->name('about');

Route::get('/index', \App\Livewire\posts\Index::class)->name('posts.index');

Route::get('/index', \App\Livewire\posts\Index::class)->name('posts.index');

Route::get('/Greating', function(){
    return view('layouts.tes');
});

Route::get('/dashboard', [DashboardController::class,'indexPage']);