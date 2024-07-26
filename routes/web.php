<?php

use App\Http\Controllers\petaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\CalendarController;



Route::get('/', function () {
    $title = 'Map';
    return view(
        'index',
        compact('title')
    );
});

//Route Peta
Route::group(['prefix' => 'peta'], function () {
    Route::get('/', function () {
        $title = 'Map';
        return view('map.index', compact('title'));
    });
    Route::get('/admin', [petaController::class, 'index'])->name('peta.admin');
    Route::get('/admin/export', [petaController::class, 'export'])->name('peta.export');
    Route::get('/admin/import', [petaController::class, 'import'])->name('peta.import');
    Route::get('/admin/create', [petaController::class, 'create'])->name('peta.create');
    Route::post('/admin/store', [petaController::class, 'store'])->name('peta.store');
    Route::get('/admin/view/{id}', [petaController::class, 'view'])->name('peta.view');
    Route::put('/admin/update', [petaController::class, 'update'])->name('peta.update');
    Route::delete('/admin/delete/{id}', [petaController::class, 'destroy'])->name('peta.delete');
});

// Route Posyandu
Route::group(['prefix' => 'posyandu'], function () {
    Route::get('/balita', [PosyanduController::class, 'index_balita']);
    Route::get('/balita/create', [PosyanduController::class, 'create_balita']);
    Route::post('/balita/store', [PosyanduController::class, 'store_balita']);
    Route::get('/balita/edit/{id}', [PosyanduController::class, 'edit_balita']);
    Route::put('/balita/update/{id}', [PosyanduController::class, 'update_balita']);
    Route::delete('/balita/delete/{id}', [PosyanduController::class, 'delete_balita']);
    Route::get('/balita/export', [PosyanduController::class, 'export_balita']);
    Route::get('/balita/filter', [PosyanduController::class, 'export_filtered_balita'])->name('balita.filter');
    Route::get('/remaja', [PosyanduController::class, 'index_remaja']);
    Route::get('/remaja/create', [PosyanduController::class, 'create_remaja']);
    Route::post('/remaja/store', [PosyanduController::class, 'store_remaja']);
    Route::get('/remaja/edit/{id}', [PosyanduController::class, 'edit_remaja']);
    Route::put('/remaja/update/{id}', [PosyanduController::class, 'update_remaja']);
    Route::delete('/remaja/delete/{id}', [PosyanduController::class, 'delete_remaja']);
    Route::get('/remaja/export', [PosyanduController::class, 'export_remaja']);
    Route::get('/remaja/filter', [PosyanduController::class, 'export_filtered_remaja'])->name('remaja.filter');
    Route::get('/lansia', [PosyanduController::class, 'index_lansia']);
    Route::get('/lansia/create', [PosyanduController::class, 'create_lansia']);
    Route::post('/lansia/store', [PosyanduController::class, 'store_lansia']);
    Route::get('/lansia/edit/{id}', [PosyanduController::class, 'edit_lansia']);
    Route::put('/lansia/update/{id}', [PosyanduController::class, 'update_lansia']);
    Route::delete('/lansia/delete/{id}', [PosyanduController::class, 'delete_lansia']);
    Route::get('/lansia/export', [PosyanduController::class, 'export_lansia']);
    Route::get('/lansia/filter', [PosyanduController::class, 'export_filtered_lansia'])->name('lansia.filter');


});


// Route Agenda
Route::get('/agenda', function () {
    $title = 'Map';
    return view('agenda.index', compact('title'));
});

Route::get('/agenda/details', [CalendarController::class, 'showDetailsPage'])->name('agenda.details');
Route::post('/agenda/store', [CalendarController::class, 'storeDetails'])->name('agenda.storeDetails');


Route::get('/navTest', function () {
    $title = 'Map';
    return view('map.navbar', compact('title'));
});
