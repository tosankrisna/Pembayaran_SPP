@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="row">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3 fw-bold fs-4">Edit Data Siswa</div>
          <div class="card-body">
            <form action="/dashboard/siswa/{{ $siswa->id_siswa }}" method="post">
              @method('put')
              @csrf
              <div class="mb-3">
                <label for="nis" class="form-label">No Induk Siswa</label>
                <input type="number" class="form-control" id="nis" value="{{ $siswa->nis }}" name="nis" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" value="{{ $siswa->nama }}" name="nama" required>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select text-capitalize" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option value="laki-laki" {{ $siswa->jenis_kelamin === 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                  <option value="perempuan" {{ $siswa->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select class="form-select" id="kelas" name="id_kelas" required>
                  <option value={{ $siswa->id_kelas }}>{{ $siswa->kelas->nama_kelas }}</option>
                  @foreach($kelas as $kls)
                    <option value={{ $kls->id_kelas }}>{{ $kls->nama_kelas }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="no_telp" class="form-label">No Telpon</label>
                <input type="number" class="form-control" id="no_telp" value="{{ $siswa->no_telp }}" name="no_telp" required>
              </div>
              <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ $siswa->alamat }}</textarea>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-md btn-primary">Edit Data</button>
                <a href="{{ route('detailSiswa', $siswa->id_siswa) }}" class="btn btn-md btn-danger">Batal</a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection