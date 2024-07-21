<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\PosyanduLansia;
use App\Models\PosyanduRemaja;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema; 
use Carbon\Carbon;


class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // CONTROLLER INDEX
    public function index_balita()
    {
        $title = 'Posyandu Desa Wonorejo';
        $balitas = PosyanduBalita::all();
        return view('posyandu.balita.index', compact('title','balitas'));
    }
    public function index_remaja()
    {
        $title = 'Posyandu Desa Wonorejo';
        $remajas = PosyanduRemaja::all();
        return view('posyandu.remaja.index', compact('title','remajas'));
    }
    public function index_lansia()
    {
        $title = 'Posyandu Desa Wonorejo';
        $lansias = PosyanduLansia::all();
        return view('posyandu.lansia.index', compact('title','lansias'));
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
        
        // Kembalikan tampilan dengan data yang diperlukan
        return view('posyandu.balita.edit', compact('balita', 'posyanduOptions', 'title'));
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
