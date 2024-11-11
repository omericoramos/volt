<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('pages/home');
});

// tratando o componente como pagina inteira
Volt::route('/users', 'counter');