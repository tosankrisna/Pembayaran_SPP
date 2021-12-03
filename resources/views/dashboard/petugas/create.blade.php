@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="row">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3 fw-bold fs-4">Tambah Data Pegawai</div>
          <div class="card-body">
            <form action="/dashboard/petugas/create" method="post">
              @csrf
              <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="number" class="form-control" id="nip" placeholder="Masukan NIP" name="nip" required>
              </div>
              <div class="mb-3">
                <label for="nama_petugas" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_petugas" placeholder="Masukan Nama Lengkap" name="nama_petugas" required>
              </div>
              <div class="mb-3">
                <label for="no_telpon" class="form-label">No Telpon</label>
                <input type="number" class="form-control" id="no_telpon" placeholder="Masukan No Telpon" name="no_telpon" required>
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
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password" required>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-md btn-primary">Submit Data</button>
                <a href="{{ route('petugas') }}" class="btn btn-md btn-danger">Batal</a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection