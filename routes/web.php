<?php
Route::get('/', function () {
    return view('home');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/ever', function () {
    return view('ever');
});

Route::post('/contact/submit', function () {
    dd(Request::all());
});