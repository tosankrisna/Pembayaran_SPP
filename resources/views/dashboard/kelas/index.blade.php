@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Kelas</h1>
  <a href="{{ route('createKelas') }}" class="btn btn-primary btn-sm btn-icon-split">
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
              <th>Nama Kelas</th>
              <th>Kompetensi Keahlian</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($kelas as $kls)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kls->nama_kelas }}</td>
                <td>{{ $kls->kompetensi_keahlian }}</td>
                <td class="d-flex gap-2">
                  <a href="{{ route('editKelas', $kls->id_kelas) }}" class="btn btn-sm btn-primary"><i class="fas fa-pen mr-1"></i>Edit</a>
                  <form action="/dashboard/kelas/{{ $kls->id_kelas }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash mr-1"></i>Delete</button>
                  </form>
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