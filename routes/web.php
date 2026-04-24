<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

// route untuk pertemuan 5
route::get('pert5', function () {
    return view('pertemuan5');
});

// route untuk dosencontroller
route::get('dosen', [DosenController::class, 'index']);
// route untuk biodata
route::get('biodata', [DosenController::class, 'biodata']);
