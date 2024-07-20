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
        $data = Peta::orderBy('rw', 'desc')->paginate(5);
        return view('map.admin.index', compact('title', 'data'));
    }

    public function create(){
        $title = 'Tambah Data Peta';
        return view('map.admin.create', compact('title'));
    }
}
