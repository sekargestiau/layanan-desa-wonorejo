<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\PosyanduLansia;
use App\Models\PosyanduRemaja;
use App\Models\Posbindu;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema; 
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;


class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // CONTROLLER INDEX

    public function index_balita(Request $request)
    {
        $filteredData =  PosyanduBalita::all();
        $title = 'Posyandu Desa Wonorejo';
        $query = PosyanduBalita::query();
    
        // Check if search is performed
        if ($request->has('category')) {
            $searchCategory = $request->category;
            $searchTerm = $request->search;
            $searchDate = $request->search_date;
    
            if ($searchCategory === 'all') {
                $query->where(function($q) use ($searchTerm) {
                    $q->where('nama_posyandu', 'LIKE', "%{$searchTerm}%")
                      ->orWhere('nama', 'LIKE', "%{$searchTerm}%")
                      ->orWhere('tanggal', 'LIKE', "%{$searchTerm}%");
                });
            } elseif ($searchCategory === 'posyandu') {
                $query->where('nama_posyandu', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'nama') {
                $query->where('nama', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'tanggal' && $searchDate) {
                $query->whereDate('tanggal', Carbon::parse($searchDate)->format('Y-m-d'));
            }
            
            // $filteredData = $query->get();
            // dd($filteredData);
        }
    
        $balitas = $query->get();
        $filteredData = $query->get();
        Session::put('filtered_data', $filteredData);
    
        return view('posyandu.balita.index', compact('title', 'balitas','filteredData'));
    }

    public function index_remaja(Request $request)
    {
        $filteredData =  PosyanduRemaja::all();
        $title = 'Posyandu Desa Wonorejo';
        $query = PosyanduRemaja::query();
    
        // Check if search is performed
        if ($request->has('category')) {
            $searchCategory = $request->category;
            $searchTerm = $request->search;
            $searchDate = $request->search_date;
    
            if ($searchCategory === 'all') {
                $query->where(function($q) use ($searchTerm) {
                    $q->where('nama_posyandu', 'LIKE', "%{$searchTerm}%")
                      ->orWhere('nama', 'LIKE', "%{$searchTerm}%")
                      ->orWhere('tanggal', 'LIKE', "%{$searchTerm}%");
                });
            } elseif ($searchCategory === 'posyandu') {
                $query->where('nama_posyandu', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'nama') {
                $query->where('nama', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'tanggal' && $searchDate) {
                $query->whereDate('tanggal', Carbon::parse($searchDate)->format('Y-m-d'));
            }
            
            // $filteredData = $query->get();
            // dd($filteredData);
        }
    
        $remajas = $query->get();
        $filteredData = $query->get();
        Session::put('filtered_data', $filteredData);
    
        return view('posyandu.remaja.index', compact('title', 'remajas','filteredData'));
    }

    public function index_lansia(Request $request)
    {
        $filteredData =  PosyanduLansia::all();
        $title = 'Posyandu Desa Wonorejo';
        $query = PosyanduLansia::query();
    
        // Check if search is performed
        if ($request->has('category')) {
            $searchCategory = $request->category;
            $searchTerm = $request->search;
            $searchDate = $request->search_date;
    
            if ($searchCategory === 'all') {
                $query->where(function($q) use ($searchTerm) {
                    $q->where('nama_posyandu', 'LIKE', "%{$searchTerm}%")
                      ->orWhere('nama', 'LIKE', "%{$searchTerm}%")
                      ->orWhere('tanggal', 'LIKE', "%{$searchTerm}%");
                });
            } elseif ($searchCategory === 'posyandu') {
                $query->where('nama_posyandu', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'nama') {
                $query->where('nama', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'tanggal' && $searchDate) {
                $query->whereDate('tanggal', Carbon::parse($searchDate)->format('Y-m-d'));
            }
            
            // $filteredData = $query->get();
            // dd($filteredData);
        }
    
        $lansias = $query->get();
        $filteredData = $query->get();
        Session::put('filtered_data', $filteredData);
    
        return view('posyandu.lansia.index', compact('title', 'lansias','filteredData'));
    }

    public function index_posbindu(Request $request)
    {
        $filteredData =  Posbindu::all();
        $title = 'Posyandu Desa Wonorejo';
        $query = Posbindu::query();
    
        // Check if search is performed
        if ($request->has('category')) {
            $searchCategory = $request->category;
            $searchTerm = $request->search;
            $searchDate = $request->search_date;
    
            if ($searchCategory === 'all') {
                $query->where(function($q) use ($searchTerm) {
                    $q->where('nama_posyandu', 'LIKE', "%{$searchTerm}%")
                      ->orWhere('nama', 'LIKE', "%{$searchTerm}%")
                      ->orWhere('tanggal', 'LIKE', "%{$searchTerm}%");
                });
            } elseif ($searchCategory === 'posyandu') {
                $query->where('nama_posyandu', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'nama') {
                $query->where('nama', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'tanggal' && $searchDate) {
                $query->whereDate('tanggal', Carbon::parse($searchDate)->format('Y-m-d'));
            }
            
            // $filteredData = $query->get();
            // dd($filteredData);
        }
    
        $posbindus = $query->get();
        $filteredData = $query->get();
        Session::put('filtered_data', $filteredData);
    
        return view('posyandu.posbindu.index', compact('title', 'posbindus','filteredData'));
    }


    /**
     * Show the form for creating a new resource.
     */

    // CONTROLLER POSYANDU BALITA - CRUD
    public function create_balita()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.balita.create', compact('title'));
    }

    public function store_balita(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_posyandu' => ['required', 'in:Posyandu Jetis,Posyandu Blimbing,Posyandu Wonorejo,Posyandu Sayangan,Posyandu Bangunrejo,Posyandu Bancakan,Posyandu Tegalan'],
            'nama' => ['required', 'string'],
            'umur_tahun' => ['required', 'integer', 'min:0'],
            'umur_bulan' => ['required', 'integer', 'min:0', 'max:11'],
            'rt' => ['required', 'integer', 'min:1'],
            'rw' => ['required', 'integer', 'min:1'],
            'berat_badan' => ['required', 'numeric', 'min:0'],
            'tinggi_badan' => ['required', 'numeric', 'min:0'],
            'lingkar_kepala' => ['required', 'numeric', 'min:0'],
            'lingkar_lengan' => ['required', 'numeric', 'min:0'],
            'tanggal' => ['required', 'date'],
            'status_stunting' => ['required', 'in:Stunting,Tidak Stunting'],
            'keterangan_lain' => ['nullable', 'string'],
        ]);

        // Membuat instance model
        $balita = new PosyanduBalita($validatedData);
        $balita->save();

        return redirect('/posyandu/balita')->with('success', 'Data balita berhasil ditambahkan.');
    }


    public function edit_balita($id)
    {
        // Temukan balita berdasarkan ID
        $balita = PosyanduBalita::findOrFail($id);
        
        // Atur judul halaman
        $title = 'Posyandu Desa Wonorejo';
        
        // Ubah format tanggal jika diperlukan
        $balita->tanggal = Carbon::parse($balita->tanggal);

        // Daftar opsi posyandu sesuai dengan enum di database
        $posyanduOptions = [
            'Posyandu Jetis',
            'Posyandu Blimbing',
            'Posyandu Wonorejo',
            'Posyandu Sayangan',
            'Posyandu Bangunrejo',
            'Posyandu Bancakan',
            'Posyandu Tegalan'
        ];
        $stuntingOptions = [
            'Stunting',
            'Tidak Stunting'
        ];
        
        // Kembalikan tampilan dengan data yang diperlukan
        return view('posyandu.balita.edit', compact('balita', 'posyanduOptions', 'stuntingOptions','title'));
    }

    

    // Mengupdate data balita
    public function update_balita(Request $request, $id)
    {
        $balita = PosyanduBalita::findOrFail($id);
        $balita->update($request->all());

        // Redirect atau response setelah update
        return redirect('/posyandu/balita')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete_balita(Request $request, $id)
    {
        try {
            $balita = PosyanduBalita::findOrFail($id);
            $balita->delete();
            return redirect('posyandu/balita')->with('success', 'Data balita berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data balita. ' . $e->getMessage());
        }
    }

    public function export_balita()
    {
        $data = PosyanduBalita::all();

        $fileName = 'data_posyandu_balita_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen($fileName, 'w+');
        fputcsv($handle, array('Nama Posyandu', 'nama','umur (tahun)', 'umur (bulan)', 'RT', 'RW', 'Berat Badan', 'Tinggi Badan', 'Lingkar Kepala', 'Lingkar Lengan', 'Tanggal','Status Stunting','Keterangan Lain'));

        foreach ($data as $row) {
        fputcsv($handle, array(
                $row['nama_posyandu'],
                $row['nama'],
                $row['umur_tahun'],
                $row['umur_bulan'],
                $row['rt'],
                $row['rw'],
                $row['berat_badan'],
                $row['tinggi_badan'],
                $row['lingkar_kepala'],
                $row['lingkar_lengan'],
                $row['tanggal'],
                $row['status_stunting'],
                $row['keterangan_lain']
            ));        
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
    }

    public function export_filtered_balita()
{
    $filteredData = Session::get('filtered_data', PosyanduBalita::all());
    $fileName = 'filtered_data_posyandu_balita_' . date('Y-m-d_H-i-s') . '.csv';
    $handle = fopen($fileName, 'w+');
    fputcsv($handle, array('Nama Posyandu', 'Nama', 'Umur (tahun)', 'Umur (bulan)', 'RT', 'RW', 'Berat Badan', 'Tinggi Badan', 'Lingkar Kepala', 'Lingkar Lengan', 'Tanggal', 'Status Stunting','Keterangan Lain'));

    foreach ($filteredData as $row) {
        fputcsv($handle, array(
            $row['nama_posyandu'],
            $row['nama'],
            $row['umur_tahun'],
            $row['umur_bulan'],
            $row['rt'],
            $row['rw'],
            $row['berat_badan'],
            $row['tinggi_badan'],
            $row['lingkar_kepala'],
            $row['lingkar_lengan'],
            $row['tanggal'],
            $row['status_stunting'],
            $row['keterangan_lain']
        ));
    }

    fclose($handle);
    $headers = array('Content-Type' => 'text/csv');
    return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
}


    // CONTROLLER POSYANDU REMAJA - CRUD
    public function create_remaja()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.remaja.create', compact('title'));
    }

    public function store_remaja(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_posyandu' => ['required', 'in:Posyandu Jetis,Posyandu Blimbing,Posyandu Wonorejo,Posyandu Sayangan,Posyandu Bangunrejo,Posyandu Bancakan,Posyandu Tegalan'],
            'nama' => ['required', 'string'],
            'umur_tahun' => ['required', 'integer', 'min:0'],
            'umur_bulan' => ['required', 'integer', 'min:0', 'max:11'],
            'rt' => ['required', 'integer', 'min:1'],
            'rw' => ['required', 'integer', 'min:1'],
            'berat_badan' => ['required', 'numeric', 'min:0'],
            'tinggi_badan' => ['required', 'numeric', 'min:0'],
            'tensi_darah' => ['required', 'numeric', 'min:0'],
            'tanggal' => ['required', 'date'],
            'keterangan_lain' => ['nullable', 'string'],
        ]);

        // Membuat instance model
        $balita = new PosyanduRemaja($validatedData);
        $balita->save();

        return redirect('/posyandu/remaja')->with('success', 'Data remaja berhasil ditambahkan.');
    }

    public function edit_remaja($id)
    {
        // Temukan balita berdasarkan ID
        $remaja = PosyanduRemaja::findOrFail($id);
        
        // Atur judul halaman
        $title = 'Posyandu Desa Wonorejo';
        
        // Ubah format tanggal jika diperlukan
        $remaja->tanggal = Carbon::parse($remaja->tanggal);

        // Daftar opsi posyandu sesuai dengan enum di database
        $posyanduOptions = [
            'Posyandu Jetis',
            'Posyandu Blimbing',
            'Posyandu Wonorejo',
            'Posyandu Sayangan',
            'Posyandu Bangunrejo',
            'Posyandu Bancakan',
            'Posyandu Tegalan'
        ];
        
        // Kembalikan tampilan dengan data yang diperlukan
        return view('posyandu.remaja.edit', compact('remaja', 'posyanduOptions', 'title'));
    }

    // Mengupdate data balita
    public function update_remaja(Request $request, $id)
    {
        $remaja = PosyanduRemaja::findOrFail($id);
        $remaja->update($request->all());

        // Redirect atau response setelah update
        return redirect('/posyandu/remaja')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete_remaja(Request $request, $id)
    {
        try {
            $remaja = PosyanduRemaja::findOrFail($id);
            $remaja->delete();
            return redirect('posyandu/remaja')->with('success', 'Data remaja berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data remaja. ' . $e->getMessage());
        }
    }

    public function export_remaja()
    {
        $data = PosyanduRemaja::all();

        $fileName = 'data_posyandu_remaja_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen($fileName, 'w+');
        fputcsv($handle, array('Nama Posyandu', 'nama','umur (tahun)', 'umur (bulan)', 'RT', 'RW', 'Berat Badan', 'Tinggi Badan', 'Tensi Darah', 'tanggal','keterangan_lain'));

        foreach ($data as $row) {
        fputcsv($handle, array(
                $row['nama_posyandu'],
                $row['nama'],
                $row['umur_tahun'],
                $row['umur_bulan'],
                $row['rt'],
                $row['rw'],
                $row['berat_badan'],
                $row['tinggi_badan'],
                $row['tensi_darah'],
                $row['tanggal'],
                $row['keterangan_lain']
            ));        
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
    }

    public function export_filtered_remaja()
{
    $filteredData = Session::get('filtered_data', PosyanduRemaja::all());
    $fileName = 'filtered_data_posyandu_remaja_' . date('Y-m-d_H-i-s') . '.csv';
    $handle = fopen($fileName, 'w+');
    fputcsv($handle, array('Nama Posyandu', 'Nama', 'Umur (tahun)', 'Umur (bulan)', 'RT', 'RW', 'Berat Badan', 'Tinggi Badan', 'Tensi Darah', 'Tanggal', 'Keterangan Lain'));

    foreach ($filteredData as $row) {
        fputcsv($handle, array(
            $row['nama_posyandu'],
            $row['nama'],
            $row['umur_tahun'],
            $row['umur_bulan'],
            $row['rt'],
            $row['rw'],
            $row['berat_badan'],
            $row['tinggi_badan'],
            $row['tensi_darah'],
            $row['tanggal'],
            $row['keterangan_lain']
        ));
    }

    fclose($handle);
    $headers = array('Content-Type' => 'text/csv');
    return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
}

    // CONTROLLER POSYANDU LANSIA - CRUD
    public function create_lansia()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.lansia.create', compact('title'));
    }

    public function store_lansia(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_posyandu' => ['required', 'in:Posyandu Jetis,Posyandu Blimbing,Posyandu Wonorejo,Posyandu Sayangan,Posyandu Bangunrejo,Posyandu Bancakan,Posyandu Tegalan'],
            'nama' => ['required', 'string'],
            'umur_tahun' => ['required', 'integer', 'min:0'],
            'rt' => ['required', 'integer', 'min:1'],
            'rw' => ['required', 'integer', 'min:1'],
            'berat_badan' => ['required', 'numeric', 'min:0'],
            'tensi_darah' => ['required', 'numeric', 'min:0'],
            'tanggal' => ['required', 'date'],
            'keterangan_lain' => ['nullable', 'string'],
        ]);

        // Membuat instance model
        $balita = new PosyanduLansia($validatedData);
        $balita->save();

        return redirect('/posyandu/lansia')->with('success', 'Data lansia berhasil ditambahkan.');
    }


    public function edit_lansia($id)
    {
        // Temukan balita berdasarkan ID
        $lansia = PosyanduLansia::findOrFail($id);
        
        // Atur judul halaman
        $title = 'Posyandu Desa Wonorejo';
        
        // Ubah format tanggal jika diperlukan
        $lansia->tanggal = Carbon::parse($lansia->tanggal);

        // Daftar opsi posyandu sesuai dengan enum di database
        $posyanduOptions = [
            'Posyandu Jetis',
            'Posyandu Blimbing',
            'Posyandu Wonorejo',
            'Posyandu Sayangan',
            'Posyandu Bangunrejo',
            'Posyandu Bancakan',
            'Posyandu Tegalan'
        ];
        
        // Kembalikan tampilan dengan data yang diperlukan
        return view('posyandu.lansia.edit', compact('lansia', 'posyanduOptions', 'title'));
    }

    

    // Mengupdate data balita
    public function update_lansia(Request $request, $id)
    {
        $lansia = PosyanduLansia::findOrFail($id);
        $lansia->update($request->all());

        // Redirect atau response setelah update
        return redirect('/posyandu/lansia')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete_lansia(Request $request, $id)
    {
        try {
            $lansia = PosyanduLansia::findOrFail($id);
            $lansia->delete();
            return redirect('posyandu/lansia')->with('success', 'Data lansia berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data lansia. ' . $e->getMessage());
        }
    }

    public function export_lansia()
    {
        $data = PosyanduLansia::all();

        $fileName = 'data_posyandu_lansia_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen($fileName, 'w+');
        fputcsv($handle, array('Nama Posyandu', 'nama','umur (tahun)','RT', 'RW', 'Berat Badan', 'Tensi Darah', 'Tanggal','Keterangan Lain'));

        foreach ($data as $row) {
        fputcsv($handle, array(
                $row['nama_posyandu'],
                $row['nama'],
                $row['umur_tahun'],
                $row['rt'],
                $row['rw'],
                $row['berat_badan'],
                $row['tensi_darah'],
                $row['tanggal'],
                $row['keterangan_lain']
            ));        
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
    }

    public function export_filtered_lansia()
{
    $filteredData = Session::get('filtered_data', PosyanduLansia::all());
    $fileName = 'filtered_data_posyandu_balita_' . date('Y-m-d_H-i-s') . '.csv';
    $handle = fopen($fileName, 'w+');
    fputcsv($handle, array('Nama Posyandu', 'Nama', 'Umur (tahun)', 'RT', 'RW', 'Berat Badan', 'Tensi Darah', 'Tanggal', 'Keterangan Lain'));

    foreach ($filteredData as $row) {
        fputcsv($handle, array(
            $row['nama_posyandu'],
            $row['nama'],
            $row['umur_tahun'],
            $row['rt'],
            $row['rw'],
            $row['berat_badan'],
            $row['tensi_darah'],
            $row['tanggal'],
            $row['keterangan_lain']
        ));
    }

    fclose($handle);
    $headers = array('Content-Type' => 'text/csv');
    return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
}
    

    // CONTROLLER POSYANDU POSBINDU - CRUD
    public function create_posbindu()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.posbindu.create', compact('title'));
    }

    public function store_posbindu(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_posyandu' => ['required', 'in:Posyandu Jetis,Posyandu Blimbing,Posyandu Wonorejo,Posyandu Sayangan,Posyandu Bangunrejo,Posyandu Bancakan,Posyandu Tegalan'],
            'nama' => ['required', 'string'],
            'umur_tahun' => ['required', 'integer', 'min:0'],
            'umur_bulan' => ['required', 'integer', 'min:0', 'max:11'],
            'rt' => ['required', 'integer', 'min:1'],
            'rw' => ['required', 'integer', 'min:1'],
            'berat_badan' => ['required', 'numeric', 'min:0'],
            'tinggi_badan' => ['required', 'numeric', 'min:0'],
            'tensi_darah' => ['required', 'numeric', 'min:0'],
            'gula_darah' => ['required', 'numeric', 'min:0'],
            'lemak_perut' => ['required', 'numeric', 'min:0'],
            'kolesterol' => ['required', 'numeric', 'min:0'],
            'tanggal' => ['required', 'date'],
            'status_perokok' => ['required', 'in:Perokok Aktif,Perokok Pasif,Bukan Perokok'],
            'riwayat_penyakit' => ['nullable', 'string'],
        ]);

        // Membuat instance model
        $balita = new Posbindu($validatedData);
        $balita->save();

        return redirect('/posyandu/posbindu')->with('success', 'Data posbindu berhasil ditambahkan.');
    }

    public function edit_posbindu($id)
    {
        // Temukan balita berdasarkan ID
        $posbindu = Posbindu::findOrFail($id);
        
        // Atur judul halaman
        $title = 'Posyandu Desa Wonorejo';
        
        // Ubah format tanggal jika diperlukan
        $posbindu->tanggal = Carbon::parse($posbindu->tanggal);

        // Daftar opsi posyandu sesuai dengan enum di database
        $posyanduOptions = [
            'Posyandu Jetis',
            'Posyandu Blimbing',
            'Posyandu Wonorejo',
            'Posyandu Sayangan',
            'Posyandu Bangunrejo',
            'Posyandu Bancakan',
            'Posyandu Tegalan'
        ];

        $perokokOptions = [
            'Perokok Aktif',
            'Perokok Pasif',
            'Bukan Perokok'
        ];
        
        // Kembalikan tampilan dengan data yang diperlukan
        return view('posyandu.posbindu.edit', compact('posbindu', 'posyanduOptions', 'perokokOptions', 'title'));
    }

    // Mengupdate data balita
    public function update_posbindu(Request $request, $id)
    {
        $posbindu = Posbindu::findOrFail($id);
        $posbindu->update($request->all());

        // Redirect atau response setelah update
        return redirect('/posyandu/posbindu')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete_posbindu(Request $request, $id)
    {
        try {
            $posbindu = Posbindu::findOrFail($id);
            $posbindu->delete();
            return redirect('posyandu/posbindu')->with('success', 'Data posbindu berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data posbindu. ' . $e->getMessage());
        }
    }

    public function export_posbindu()
    {
        $data = Posbindu::all();

        $fileName = 'data_posbindu_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen($fileName, 'w+');
        fputcsv($handle, array('Nama Posyandu', 'nama','umur (tahun)', 'umur (bulan)', 'RT', 'RW', 'Berat Badan', 'Tinggi Badan','Lemak Perut', 'Tensi Darah','Gula Darah','Kolesterol', 'Tanggal','Status Perokok', 'Riwayat Penyakit'));

        foreach ($data as $row) {
        fputcsv($handle, array(
                $row['nama_posyandu'],
                $row['nama'],
                $row['umur_tahun'],
                $row['umur_bulan'],
                $row['rt'],
                $row['rw'],
                $row['berat_badan'],
                $row['tinggi_badan'],
                $row['lemak_perut'],
                $row['tensi_darah'],
                $row['gula_darah'],
                $row['kolesterol'],
                $row['tanggal'],
                $row['status_perokok'],
                $row['riwayat_penyakit']
            ));        
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
    }

    public function export_filtered_posbindu()
    {
        $filteredData = Session::get('filtered_data', Posbindu::all());
        $fileName = 'filtered_data_posbindu_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen($fileName, 'w+');
        fputcsv($handle, array('Nama Posyandu', 'Nama', 'Umur (tahun)', 'Umur (bulan)', 'RT', 'RW', 'Berat Badan', 'Tinggi Badan','Lemak Perut', 'Tensi Darah','Gula Darah','Kolesterol', 'Tanggal','Status Perokok', 'Riwayat Penyakit'));

        foreach ($filteredData as $row) {
            fputcsv($handle, array(
                $row['nama_posyandu'],
                $row['nama'],
                $row['umur_tahun'],
                $row['umur_bulan'],
                $row['rt'],
                $row['rw'],
                $row['berat_badan'],
                $row['tinggi_badan'],
                $row['lemak_perut'],
                $row['tensi_darah'],
                $row['gula_darah'],
                $row['kolesterol'],
                $row['tanggal'],
                $row['status_perokok'],
                $row['riwayat_penyakit']
            ));
        }

        fclose($handle);
        $headers = array('Content-Type' => 'text/csv');
        return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
