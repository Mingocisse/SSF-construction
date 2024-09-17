<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');  

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/equipment', function () {
    return view('equipment');
})->name('equipment');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/road', function () {
    return view('road');
})->name('road');

Route::get('/building', function () {
    return view('building');
})->name('building');

Route::get('/civil', function () {
    return view('civil');
})->name('civil');

Route::get('/complete', function () {
    return view('complete');
})->name('complete');