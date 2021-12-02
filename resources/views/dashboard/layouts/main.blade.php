@extends('layouts.main')

@section('content')

  @include('dashboard.layouts.sidebar')

  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      @include('dashboard.layouts.header')

      <div class="container-fluid">
        @yield('dashboard-content')
      </div>
    </div>
  </div>

@endsection

