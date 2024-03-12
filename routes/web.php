<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function () {
    return view('contacts');
});

Route::get('/chi-sono', function () {
    return view('chisono',[
        'titolo' => 'Mi presento',
        'descrizione' => 'Ciao, sono Carmen e vengo da Napoli.'
    ]);
});

Route::get('/benvenuto', function () {
    return view('welcome');
});
