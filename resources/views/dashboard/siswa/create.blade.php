@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="row">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3 fw-bold fs-4">Tambah Data Siswa</div>
          <div class="card-body">
            <form action="/dashboard/siswa/create" method="post">
              @csrf
              <div class="mb-3">
                <label for="nis" class="form-label">No Induk Siswa</label>
                <input type="number" class="form-control" id="nis" placeholder="Masukan No Induk Siswa" name="nis" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" name="nama" required>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option selected disabled>Pilih Jenis Kelamin</option>
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select class="form-select" id="kelas" name="id_kelas" required>
                  <option selected disabled>Pilih kelas</option>
                  @foreach($kelas as $kls)
                    <option value={{ $kls->id_kelas }}>{{ $kls->nama_kelas }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password" required>
              </div>
              <div class="mb-3">
                <label for="no_telp" class="form-label">No Telpon</label>
                <input type="number" class="form-control" id="no_telp" placeholder="Masukan No Telpon" name="no_telp" required>
              </div>
              <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-md btn-primary">Submit Data</button>
                <a href="{{ route('siswa') }}" class="btn btn-md btn-danger">Batal</a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection