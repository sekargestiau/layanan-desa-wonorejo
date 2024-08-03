<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\petaController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\superAdminController;
use App\Http\Controllers\AgendaController;

Route::get('/example', function () {
    $title = 'Map';
    return view(
        'index',
        compact('title')
    );
});

Route::get('/', function () {
    $title = 'Layanan Desa Wonorejo';
    return view('landing', compact('title'));
})->name('home');

//Route Peta
Route::get('peta/', [petaController::class, 'map'])->name('peta.map');
Route::group(['prefix' => 'peta', 'middleware' => ['isLogin', 'adminPeta']], function () {
    Route::get('/admin', [petaController::class, 'index'])->name('peta.admin');
    Route::get('/admin/export', [petaController::class, 'export'])->name('peta.export');
    Route::get('/admin/filter', [petaController::class, 'export_filtered'])->name('peta.filter');
    // Route::get('/admin/import', [petaController::class, 'import'])->name('peta.import');
    Route::get('/admin/create', [petaController::class, 'create'])->name('peta.create');
    Route::post('/admin/store', [petaController::class, 'store'])->name('peta.store');
    Route::get('/admin/view/{id}', [petaController::class, 'view'])->name('peta.view');
    Route::put('/admin/update', [petaController::class, 'update'])->name('peta.update');
    Route::delete('/admin/delete/{id}', [petaController::class, 'destroy'])->name('peta.delete');
});

// Route Posyandu
// Route::group(['prefix' => 'posyandu', 'middleware' => 'auth'], function () {
Route::group(['prefix' => 'posyandu', 'middleware' => ['isLogin','adminPosyandu']], function () {
    Route::get('/', [PosyanduController::class, 'index_balita'])->name('posyandu.admin');
    Route::get('/balita', [PosyanduController::class, 'index_balita'])->name('posyandu.admin');
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
    Route::get('/posbindu', [PosyanduController::class, 'index_posbindu']);
    Route::get('/posbindu/create', [PosyanduController::class, 'create_posbindu']);
    Route::post('/posbindu/store', [PosyanduController::class, 'store_posbindu']);
    Route::get('/posbindu/edit/{id}', [PosyanduController::class, 'edit_posbindu']);
    Route::put('/posbindu/update/{id}', [PosyanduController::class, 'update_posbindu']);
    Route::delete('/posbindu/delete/{id}', [PosyanduController::class, 'delete_posbindu']);
    Route::get('/posbindu/export', [PosyanduController::class, 'export_posbindu']);
    Route::get('/posbindu/filter', [PosyanduController::class, 'export_filtered_posbindu'])->name('posbindu.filter');
});

Route::group(['prefix' => 'pengaduan'], function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('pengaduan');
    Route::post('/', [PengaduanController::class, 'store']);
    Route::group(['middleware' => ['isLogin', 'adminPengaduan']], function () {
        Route::get('/admin', [PengaduanController::class, 'show_all'])->name('pengaduan.admin');
        Route::get('/admin/stats', [PengaduanController::class, 'stats']);
        Route::get('/admin/export', [PengaduanController::class, 'export_data'])->name('pengaduan.export');
        Route::get('/isu/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');
        Route::get('/isu/{id}/delete', [PengaduanController::class, 'destroy'])->name('pengaduan.delete');
        Route::patch('/isu/{id}/status', [PengaduanController::class, 'updateStatus'])->name('pengaduan.updateStatus');
    });
});

Route::prefix('agenda')->name('agenda.')->group(function () {
    Route::get('/', function () {
        $title = 'Agenda';
        return view('agenda.index', compact('title'));
    })->name('index');

    // Allow guests to access the events
    Route::get('/events', [AgendaController::class, 'getEvents'])->name('events.get');

    Route::middleware('auth')->group(function () {
        Route::get('/tambah', [AgendaController::class, 'create'])->name('tambah');
        Route::post('/events', [AgendaController::class, 'storeEvent'])->name('events.store');
        Route::delete('/events/{id}', [AgendaController::class, 'destroy'])->name('events.destroy');
        Route::get('/detail-agenda', [AgendaController::class, 'showDetailAgenda'])->name('detail_agenda.index');
        Route::put('/events/{id}', [AgendaController::class, 'update'])->name('events.update');
    });
});

Auth::routes();


Route::group(['prefix' => 'superadmin', 'middleware' => ['isLogin','superadmin']], function(){
    Route::get('/', [superAdminController::class,'index'])->name('superadmin');
    Route::patch('/updateStatus/{id}', [superAdminController::class,'updateStatus'])->name('superadmin.updateStatus');
    Route::get('/create', [superAdminController::class,'create'])->name('superadmin.create');
    Route::post('/store', [superAdminController::class,'store'])->name('superadmin.store');
    Route::get('/view/{id}', [superAdminController::class,'view'])->name('superadmin.view');
    Route::put('/update/{id}', [superAdminController::class,'update'])->name('superadmin.update');
    Route::delete('/delete/{id}', [superAdminController::class,'delete'])->name('superadmin.delete');
});

Route::group(['middleware' => 'notLogin'], function(){
    Route::get('/login', [sessionController::class,'index'])->name('loginPage');
    Route::post('/login', [sessionController::class,'login'])->name('login');
});
Route::get('/logout',[sessionController::class,'logout'])->name('logout');

Route::get('/landing', function () {
    $title = 'Map';
    return view('landing', compact('title'));
});

Route::get('/navTest', function () {
    $title = 'Map';
    return view('map.navbar', compact('title'));
});

