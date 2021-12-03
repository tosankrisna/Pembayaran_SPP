<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Kelas $kelas)
    {
        return view('dashboard.kelas.index', [
            'kelas' => $kelas->all()
        ]);
    }

    public function create()
    {
        return view('dashboard.kelas.create');
    }

    public function store(Request $request, Kelas $kelas)
    {
        $validated = $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required',
        ]);

        $kelas->create($validated);
        return redirect(route('kelas'));
    }

    public function edit(Kelas $kelas)
    {
        return view('dashboard.kelas.edit', [
            'kelas' => $kelas
        ]);
    }

    public function update(Request $request, Kelas $kelas)
    {
        $validated = $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required',
        ]);

        $kelas->update($validated);
        return redirect(route('kelas'));
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete($kelas);
        return redirect(route('kelas'));
    }
}
