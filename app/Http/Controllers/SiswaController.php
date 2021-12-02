<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::orderBy('id_siswa', 'desc')->get();
        return view('dashboard.siswa.index', [
            'siswa' => $siswa
        ]);
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('dashboard.siswa.create', [
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request, Siswa $siswa)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3|max:35',
            'nis' => 'required|max:8|unique:siswa',
            'jenis_kelamin' => 'required',
            'id_kelas' => 'required',
            'password' => 'required',
            'no_telp' => 'required|max:13',
            'alamat' => 'required'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $siswa->create($validated);

        return redirect(route('siswa'));
    }

    public function show(Siswa $siswa)
    {
        return view('dashboard.siswa.show', [
            'siswa' => $siswa
        ]);
    }

    public function edit(Siswa $siswa)
    {
        $kelas = Kelas::where('id_kelas', '!=', $siswa->id_kelas)->get();
        return view('dashboard.siswa.edit', [
            'siswa' => $siswa,
            'kelas' => $kelas
        ]);
    }

    public function update(Request $request, Siswa $siswa)
    {   
        $validated = $request->validate([
            'nama' => 'required|min:3|max:35',
            'nis' => 'required|max:8|' . Rule::unique('siswa')->ignore($siswa, 'id_siswa'),
            'jenis_kelamin' => 'required',
            'id_kelas' => 'required',
            'no_telp' => 'required|max:13',
            'alamat' => 'required'
        ]);

        $siswa->update($validated);
        return redirect(route('siswa'));
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete($siswa);
        return redirect(route('siswa'));
    }
}
