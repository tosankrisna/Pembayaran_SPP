@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Petugas</h1>
  <a href="#" class="btn btn-primary btn-sm btn-icon-split">
    <span class="icon text-white-50 rounded-circle">
      <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data</span>
  </a>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3"></div>
  <div class="card-body">
    <div class="row">
      <div class="col d-flex justify-content-end">
        <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
        class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
      </div>
    </div>
    <div class="row">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Level</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach($petugas as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_petugas }}</td>
                <td>{{ $data->nip }}</td>
                <td>{{ $data->level }}</td>
                <td>
                  <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-info-circle mr-1"></i>Detail</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection