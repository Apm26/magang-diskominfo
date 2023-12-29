<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('profil/', function() {
    return view('profile');
});

Route::get('berita/', function() {
    return view('news');
});

Route::get('unduh/', function() {
    return view('download');
});

Route::get('galeri/', function() {
    return view('gallery');
});

Route::get('kontak/', function() {
    return view('contacts');
});
