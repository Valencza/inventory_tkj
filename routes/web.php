<?php

use Illuminate\Support\Facades\Route;

//redirect url
Route::get('/', function () {
    return redirect()->route('login');
});

//login
Route::get('/login', function () {
    return view('auth.index');
})->name('login');

//redirect url
Route::get('/dashboard', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard/index');
})->name('dashboard');

//Products
Route::get('/products/index', function () {
    return view('products/index');
})->name('products.index');

Route::get('/products/create', function () {
    return view('products/create');
})->name('products.create');

Route::get('/products/edit', function () {
    return view('products/edit');
})->name('products.edit');

Route::get('/products/detail', function () {
    return view('products/detail');
})->name('products.detail');

Route::get('/kategori/index', function () {
    return view('kategori/index');
})->name('kategori.index');

Route::get('/kategori/create', function () {
    return view('kategori/create');
})->name('kategori.create');

Route::get('/kategori/edit', function () {
    return view('kategori/edit');
})->name('kategori.edit');

Route::get('/peminjam/index', function () {
    return view('peminjaman.index');
})->name('peminjaman.index');

Route::get('/pengajuan/index', function () {
    return view('pengajuan.index');
})->name('pengajuan.index');

