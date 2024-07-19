<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosyanduController;


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

// Route Posyandu
Route::group(['prefix' => 'posyandu'], function () {
    Route::get('/balita', [PosyanduController::class, 'index_balita']);
    Route::get('/remaja', [PosyanduController::class, 'index_remaja']);
    Route::get('/lansia', [PosyanduController::class, 'index_lansia']);
    Route::get('/balita/create', [PosyanduController::class, 'create_balita']);
    Route::get('/remaja/create', [PosyanduController::class, 'create_remaja']);
    Route::get('/lansia/create', [PosyanduController::class, 'create_lansia']);

    Route::get('/remaja/create', function () {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.balita.create', compact('title'));
    });
    Route::get('/lansia', function () {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.lansia.index', compact('title'));
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
