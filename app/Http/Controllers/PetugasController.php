<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::orderBy('id_petugas', 'desc')->get();
        return view('dashboard.petugas.index', [
            'petugas' => $petugas
        ]);
    }

    public function create()
    {
        return view('dashboard.petugas.create');
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'nip' => 'required|max:8|unique:petugas',
            'password' => 'required',
            'nama_petugas' => 'required|max:35',
            'jenis_kelamin' => 'required',
            'no_telpon' => 'required|max:13'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Petugas::create($validated);
 
        return redirect(route('petugas'));
    }

    public function show(Petugas $petugas)
    {
        return view('dashboard.petugas.show', [
            'petugas' => $petugas
        ]);
    }

    public function edit(Petugas $petugas)
    {
        return view('dashboard.petugas.edit', [
            'petugas' => $petugas
        ]);
    }

    public function update(Request $request, Petugas $petugas)
    {
        $validated = $request->validate([
            'nip' => 'required|max:8|' . Rule::unique('petugas')->ignore($petugas, 'id_petugas'),
            'nama_petugas' => 'required|max:35',
            'jenis_kelamin' => 'required',
            'no_telpon' => 'required|max:13'
        ]);

        $petugas->update($validated);
        return redirect(route('petugas'));
    }

    public function destroy(Petugas $petugas)
    {
        $petugas->delete($petugas);
        return redirect(route('petugas'));
    }
}
