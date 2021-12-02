<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::orderBy('id_petugas', 'desc')->get();
        return view('dashboard.petugas.index', [
            'petugas' => $petugas
        ]);
    }

    public function show(Petugas $petugas)
    {
        $petugas = $petugas->find($petugas);
        return view('dashboard.petugas.edit', [
            'petugas' => $petugas
        ]);
    }
}
