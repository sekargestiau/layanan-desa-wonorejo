<?php

use Illuminate\Support\Facades\Route;

Route::get('/posyandu', function () {
    return view('posyandu.index');
});

Route::get('/peta', function(){
    $title = 'Map';
    return view('map.index', compact('title'));
});

Route::get('/agenda', function(){
    $title = 'Map';
    return view('agenda.index', compact('title'));
});