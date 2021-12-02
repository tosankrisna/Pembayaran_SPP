@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="row">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3 fw-bold fs-4">Detail Siswa</div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col">
              <div class="mb-3">
                <label for="nis" style="font-size: .8em">No Induk Siswa</label>
                <p class="" style="font-size: 1.3em">{{ $siswa->nis }}</p>
              </div>
              <div class="mb-3">
                <label for="nama" style="font-size: .8em">Nama Lengkap</label>
                <p class="" style="font-size: 1.3em">{{ $siswa->nama }}</p>
              </div>
              <div class="mb-3">
                <label for="jk" style="font-size: .8em">Jenis Kelamin</label>
                <p class="text-capitalize" style="font-size: 1.3em">{{ $siswa->jenis_kelamin }}</p>
              </div>
              <div class="mb-3">
                <label for="no_telp" style="font-size: .8em">No Telpon</label>
                <p class="text-capitalize" style="font-size: 1.3em">{{ $siswa->no_telp }}</p>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="alamat" style="font-size: .8em">Alamat</label>
                <p class="text-capitalize" style="font-size: 1.3em">{{ $siswa->alamat }}</p>
              </div>
              <div class="mb-3">
                <label for="kelas" style="font-size: .8em">Kelas</label>
                <p class="text-capitalize" style="font-size: 1.3em">{{ $siswa->kelas->nama_kelas }}</p>
              </div>
              <div class="mb-3">
                <label for="kompetensi" style="font-size: .8em">Kompetensi Keahlian</label>
                <p class="text-capitalize" style="font-size: 1.3em">{{ $siswa->kelas->kompetensi_keahlian }}</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3 d-flex">
                <a href="{{ route('editSiswa', $siswa->id_siswa) }}" class="btn btn-md btn-primary mr-2">Edit Data</a>
                <form action="/dashboard/siswa/{{ $siswa->id_siswa }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-md btn-danger">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection