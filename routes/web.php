<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/peraturan', function () {
    return view('rules');
})->name('peraturan');

Route::get('/sertifikat', function () {
    return view('sertifikat');
})->name('event.sertifikat');

Route::get('/beritaacara', function () {
    return view('event_acara');
})->name('event.acara');