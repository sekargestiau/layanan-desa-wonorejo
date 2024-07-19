<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Map';
    return view(
        'index',
        compact('title')
    );
});

Route::group(['prefix' => 'peta'], function () {
    Route::get('/', function () {
        $title = 'Map';
        return view('map.index', compact('title'));
    });
    Route::get('/admin', function () {
        $title = 'Map';
        return view('map.admin.index', compact('title'));
    });
});


Route::get('/agenda', function () {
    $title = 'Map';
    return view('agenda.index', compact('title'));
});

Route::get('/navTest', function () {
    $title = 'Map';
    return view('map.navbar', compact('title'));
});
