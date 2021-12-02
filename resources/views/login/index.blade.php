@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row d-flex justify-content-center mt-5">
    <div class="col col-md-8 col-xl-5 shadow bg-body px-4 py-5 rounded">
      <div class="form-header text-center fw-bold fs-3 mb-3">
        Login User
      </div>
      <form action="">
        <div class="mb-3">
          <label for="no_induk" class="form-label">No Induk</label>
          <input type="text" class="form-control" id="no_induk" placeholder="Username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <button class="btn btn-primary px-5 py-2 rounded-pill" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection