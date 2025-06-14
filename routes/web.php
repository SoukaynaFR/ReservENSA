<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/login-admin', function () {
    return view('auth.login-admin');
})->name('login.admin');

Route::get('/login-etudiant', function () {
    return view('auth.login-etudiant');
})->name('login.etudiant');
