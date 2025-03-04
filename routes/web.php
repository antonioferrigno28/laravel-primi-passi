<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["saluto" => "Ciao amico mio", "nome" => "Dolo"]);
})->name("home");

Route::get('/landing', function () {
    return view('landing');
})->name("landingpage");
