<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dpm');
});

Route::get('/peraturan', function () {
    return view('peraturan');
});

Route::get('/sertifikat', function () {
    return view('sertifikat');
});

Route::get('/beritaacara', function () {
    return view('berita_acara');
});