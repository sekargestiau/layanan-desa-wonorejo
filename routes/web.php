<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home';    
    return view('index', compact('title'));
});

Route::get('/peta', function(){
    $title = 'Map';
    return view('map.index', compact('title'));
});