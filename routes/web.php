<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/submit', function () {
    dd(Request::all());
});

Route::get('/post/create', function () {
    DB::table('post')->insert([
        'title' => 'dekavin',
        'body' => 'its kinda long text'
    ]
    );
});

Route:: get('post',[BlogController::class, 'index']);

Route::get('post/create', function () {
    return view('create');
});

Route::post('post/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);