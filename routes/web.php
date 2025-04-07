<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;


Route::get('/', function () {
    $voitures = \App\Models\Voiture::all();
    return view('voitures.index', compact('voitures'));
});

Route::resource('voitures', VoitureController::class);