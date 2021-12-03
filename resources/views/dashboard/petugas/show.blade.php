@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="row">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3 fw-bold fs-4">Detail Petugas</div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col">
              <div class="mb-3">
                <label for="nip" style="font-size: .8em">NIP</label>
                <p class="" style="font-size: 1.3em">{{ $petugas->nip }}</p>
              </div>
              <div class="mb-3">
                <label for="nama" style="font-size: .8em">Nama Lengkap</label>
                <p class="" style="font-size: 1.3em">{{ $petugas->nama_petugas }}</p>
              </div>
              <div class="mb-3">
                <label for="no_telpon" style="font-size: .8em">No Telpon</label>
                <p class="" style="font-size: 1.3em">{{ $petugas->no_telpon }}</p>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="jk" style="font-size: .8em">Jenis Kelamin</label>
                <p class="text-capitalize" style="font-size: 1.3em">{{ $petugas->jenis_kelamin }}</p>
              </div>
              <div class="mb-3">
                <label for="level" style="font-size: .8em">level</label>
                <p class="text-capitalize" style="font-size: 1.3em">{{ $petugas->level }}</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3 d-flex">
                <a href="{{ route('editPetugas', $petugas->id_petugas) }}" class="btn btn-md btn-primary mr-2">Edit Data</a>
                <form action="/dashboard/petugas/{{ $petugas->id_petugas }}" method="post">
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