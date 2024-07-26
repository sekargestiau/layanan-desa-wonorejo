<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengaduanController;

Route::get('/', function () {
    $title = 'Home';
    return view('index', compact('title'));
});

Route::get('/peta', function () {
    $title = 'Map';
    return view('map.index', compact('title'));
});

Route::group(['prefix' => 'pengaduan'], function () {
    Route::get('/', [PengaduanController::class, 'index']);
    Route::post('/', [PengaduanController::class, 'store']);
    Route::get('/admin', [PengaduanController::class, 'show_all']);
    Route::get('/admin/stats', [PengaduanController::class, 'stats']);
    Route::get('/admin/export', [PengaduanController::class, 'export_data'])->name('pengaduan.export');
    Route::get('/isu/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');
    Route::get('/isu/{id}/delete', [PengaduanController::class, 'destroy'])->name('pengaduan.delete');
    Route::patch('/isu/{id}/status', [PengaduanController::class, 'updateStatus'])->name('pengaduan.updateStatus');

});
