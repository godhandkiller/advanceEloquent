<?php
use App\Post;

Route::get('/', function () {
    $posts = Post::where('id', '>=', 40)->get();

    return $posts;

    return view('welcome');
});
