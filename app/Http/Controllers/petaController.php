<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class petaController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = Peta::all();
        $filteredData = Peta::all();
        $title = 'Peta Desa Wonorejo';
        $query = Peta::query();

        // Check if search is performed
        if ($request->has('category')) {
            $searchCategory = $request->category;
            $searchTerm = $request->search;

            if ($searchCategory === 'all') {
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('dusun', 'LIKE', "%{$searchTerm}%")
                        ->orWhere('rw', 'LIKE', "%{$searchTerm}%")
                        ->orWhere('rt', 'LIKE', "%{$searchTerm}%")
                        ->orWhere('destinasi', 'LIKE', "%{$searchTerm}%");
                });
            } elseif ($searchCategory === 'dusun') {
                $query->where('dusun', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'rw') {
                $query->where('rw', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'rt') {
                $query->where('rt', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'destinasi') {
                $query->where('destinasi', 'LIKE', "%{$searchTerm}%");
            }
        }

        $data = $query->orderBy('rw', 'asc')->paginate(10);
        $filteredData = $query->get();
        Session::put('filteredData', $filteredData);

        return view('map.admin.index', compact('title', 'data', 'filteredData'));
    }


    public function map()
    {
        $title = 'Peta Desa Wonorejo';
        $data = Peta::all();
        return view('map.index', compact('title', 'data'));
    }

    public function create()
    {
        $title = 'Tambah Data Peta';
        return view('map.admin.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'dusun' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'destinasi' => 'required',
        ], [
            'dusun.required' => 'Dusun harus diisi',
            'rw.required' => 'RW harus diisi',
            'rt.required' => 'RT harus diisi',
            'destinasi.required' => 'Destinasi harus diisi',
        ]);

        $peta = new Peta();
        $peta->dusun = $validate['dusun'];
        $peta->rw = $validate['rw'];
        $peta->rt = $validate['rt'];
        $peta->destinasi = $validate['destinasi'];
        $peta->save();

        return redirect()->route('peta.admin')->with('success', 'Data berhasil ditambahkan');
    }

    public function view($id)
    {
        $title = 'Detail Data Peta';
        $peta = Peta::find($id);
        return view('map.admin.view', compact('title', 'peta'));
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'dusun' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'destinasi' => 'required',
        ], [
            'dusun.required' => 'Dusun harus diisi',
            'rw.required' => 'RW harus diisi',
            'rt.required' => 'RT harus diisi',
            'destinasi.required' => 'Destinasi harus diisi',
        ]);

        $peta = Peta::find($request->id);
        $peta->dusun = $validate['dusun'];
        $peta->rw = $validate['rw'];
        $peta->rt = $validate['rt'];
        $peta->destinasi = $validate['destinasi'];
        $peta->save();

        return redirect()->route('peta.admin')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $peta = Peta::find($id);
        $peta->delete();

        return redirect()->route('peta.admin')->with('success', 'Data berhasil dihapus');
    }

    public function export()
    {
        $data = Peta::all();

        $fileName = 'data_peta_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen($fileName, 'w+');
        fputcsv($handle, array('Dusun', 'RW', 'RT', 'Destinasi'));

        foreach ($data as $row) {
            fputcsv($handle, array($row['dusun'], $row['rw'], $row['rt'], $row['destinasi']));
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
    }

    public function export_filtered()
    {
        $data = Session::get('filteredData', Peta::all());

        $fileName = 'filtered_data_peta_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen($fileName, 'w+');
        fputcsv($handle, array('Dusun', 'RW', 'RT', 'Destinasi'));

        foreach ($data as $row) {
            fputcsv($handle, array($row['dusun'], $row['rw'], $row['rt'], $row['destinasi']));
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
    }
}
