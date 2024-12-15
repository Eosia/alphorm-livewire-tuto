<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ShowPosts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/counter', Counter::class);

Route::get('/create-post', CreatePost::class);

Route::get('posts', ShowPosts::class)->name('posts');
