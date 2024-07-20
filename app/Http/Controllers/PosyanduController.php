<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // CONTROLLER INDEX
    public function index_balita()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.balita.index', compact('title'));
    }
    public function index_remaja()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.remaja.index', compact('title'));
    }
    public function index_lansia()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.lansia.index', compact('title'));
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    // CONTROLLER POSYANDU REMAJA - CRUD
    public function create_remaja()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.remaja.create', compact('title'));    }

    // CONTROLLER POSYANDU LANSIA - CRUD
    public function create_lansia()
    {
        $title = 'Posyandu Desa Wonorejo';
        return view('posyandu.lansia.create', compact('title'));    }
}
