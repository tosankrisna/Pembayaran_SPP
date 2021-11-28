@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row d-flex justify-content-center mt-5">
    <div class="col col-md-5 shadow bg-body px-4 pt-5 pb-3 mb-5 rounded">
      <div class="form-header text-center fw-bold fs-3 mb-3">
        Register User
      </div>
      <form action="">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="nis" class="form-label">No Induk Siswa</label>
          <input type="number" class="form-control" id="nis" placeholder="Masukan No Induk Siswa" name="nis" required>
        </div>
        <div class="mb-3">
          <label for="kelas" class="form-label">Kelas</label>
          <select class="form-select" id="kelas">
            <option selected disabled>Pilih kelas</option>
            <option value="rpl">RPL</option>
            <option value="mm">MM</option>
            <option value="tkj">TKJ</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password" required>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <button class="btn btn-primary px-5 py-2 rounded-pill" type="submit">Register</button>
        </div>
      </form>
      <p class="text-black mt-3 text-center">Already have an account? <a href="{{ route('login') }}" class="text-danger fw-bold text-decoration-none">login here</a></p>
    </div>
  </div>
</div>
@endsection