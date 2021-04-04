<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\UserN;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SendEmailController;


/* Route::get('/', function () {
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
*/


/*Route:: get('post',[BlogController::class, 'index']);

Route::get('post/create', function () {
    return view('create');
});

Route::post('post/create', [BlogController::class, 'store'])->name('add-post');


Route::get('post/{id}', [BlogController::class, 'get_post']);*/

Route::get('post/create', [UploadController::class, 'uploadForm']);
Route::post('post/create', [UploadController::class, 'uploadSubmit']);
Route:: get('post',[UploadController::class, 'index']);
Route::get('post/{id}', [UploadController::class, 'get_post']);

Route::get('/contact', [SendEmailController::class, 'index']);
Route::post('/contact/send', [SendEmailController::class, 'send']);
