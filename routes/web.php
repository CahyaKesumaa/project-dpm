<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('main');
Route::get('/peraturan', [PageController::class, 'rules'])->name('peraturan');
Route::get('/event/sertifikat', [PageController::class, 'sertifikat'])->name('event.sertifikat');
Route::get('/event/beritaacara', [PageController::class, 'acara'])->name('event.acara');