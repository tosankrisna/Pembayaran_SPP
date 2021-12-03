@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="row">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3 fw-bold fs-4">Edit Data Kelas</div>
          <div class="card-body">
            <form action="/dashboard/kelas/{{ $kelas->id_kelas }}" method="post">
              @csrf
              @method('put')
              <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" value="{{ $kelas->nama_kelas }}" name="nama_kelas" required>
              </div>
              <div class="mb-3">
                <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                <input type="text" class="form-control" id="kompetensi_keahlian" value="{{ $kelas->kompetensi_keahlian }}" name="kompetensi_keahlian" required>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-md btn-primary">Edit Data</button>
                <a href="{{ route('kelas') }}" class="btn btn-md btn-danger">Batal</a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection