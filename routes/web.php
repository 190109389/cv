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


Route::post('/contact/submit', function () {
    dd(Request::all());
});