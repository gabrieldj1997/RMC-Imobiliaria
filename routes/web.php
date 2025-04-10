<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/properties', function () {
    return view('properties');
})->name('properties');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/propertyDetails', function () {
    return view('property-details');
})->name('propertyDetails');