<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Venue;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// home route
Route::get('/', function () {
    return view('home');
});

// venues
Route::get('/venues', function () {
    return view('venues', [
        'venues' => Venue::all()
    ]);
});

Route::get('/venues/{venue:name}', function (Venue $venue) {
    return view('venue', [
        'venue' => $venue
    ]);
});



// LARACASTS
// LARACASTS
// LARACASTS
Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        // 'posts' => $author->posts->load(['category', 'author'])      see Post model - $with
        'posts' => $author->posts

    ]);
});
