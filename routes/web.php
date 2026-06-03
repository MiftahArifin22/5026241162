<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;

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

// route untuk template
route::get('template', function () {
    return view('template');
});

// route untuk responsive
route::get('responsive', function () {
    return view('responsive');
});

//route untuk pertemuan4
route::get('pert4', function () {
    return view('pertemuan4');
});

//route untuk news
route::get('news', function () {
    return view('news');
});

//route untuk intro
route::get('intro', function () {
    return view('intro');
});

//route untuk shopweb
route::get('shopweb', function () {
    return view('shopweb');
});

//route untuk index
route::get('index', function () {
    return view('index');
});

//route untuk linktree
route::get('linktree', function () {
    return view('linktree');
});

//route untuk makeoverinstagram
route::get('instagram', function () {
    return view('makeoverinstagram');
});

//route untuk halaman
route::get('halaman', function () {
    return view('halaman');
});

//route untuk pegawaidb
route::get('pegawai', [PegawaiDBController::class, 'index']);
route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);


//route untuk tambah pegawai
route::get('pegawai/tambah', [PegawaiDBController::class, 'tambah']);
