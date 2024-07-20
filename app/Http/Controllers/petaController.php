<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use Illuminate\Http\Request;

class petaController extends Controller
{
    //
    public function index()
    {
        $title = 'Peta Desa Wonorejo';
        $data = Peta::orderBy('rw', 'desc')->paginate(10);
        return view('map.admin.index', compact('title', 'data'));
    }

    public function create(){
        $title = 'Tambah Data Peta';
        return view('map.admin.create', compact('title'));
    }

    public function store(Request $request){
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

    public function view($id){
        $title = 'Detail Data Peta';
        $peta = Peta::find($id);
        return view('map.admin.view', compact('title', 'peta'));
    }

    public function update(Request $request){
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

    public function destroy($id){
        $peta = Peta::find($id);
        $peta->delete();

        return redirect()->route('peta.admin')->with('success', 'Data berhasil dihapus');
    }
}
