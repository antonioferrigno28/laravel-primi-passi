<?php

use Illuminate\Support\Facades\Route;

//rotta base
Route::get('/', function () {
    //ritorno la view del file home.blade.php
    return view('home', ["saluto" => "Ciao amico mio", "nome" => "Dolo"]);
    //nome della rotta da usare nel tag a NB il nome della rotta va benissimo diverso da quello dell'url effettivo o del file blade
})->name("home");


//rotta landing
Route::get('/landing', function () {
    //ritorno la view del file landing.blade.php
    return view('landing');
    //nome della rotta da usare nel tag a NB il nome della rotta va benissimo diverso da quello dell'url effettivo o del file blade
})->name("landingpage");

Route::get('/testcompact', function () {

    //definisco dei dati info da stampare in pagina
    $info = "Test del compact";

    //ritorno la view del file compact.blade.php passandogli dinamicamente con il compact le informazioni che verranno visualizzate in pagina
    return view('compact', compact("info"));
    //nome della rotta da usare nel tag a NB il nome della rotta va benissimo diverso da quello dell'url effettivo o del file blade
})->name("testcompactpage");
