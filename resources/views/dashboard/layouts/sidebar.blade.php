<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-text mx-3">Smart SPP</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Daftar Menu
  </div>

  <li class="nav-item {{ Request::is('dashboard/siswa*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('siswa') }}">
      <i class="fas fa-fw fa-users"></i>
      <span>Siswa</span></a>
  </li>
  <li class="nav-item {{ Request::is('dashboard/petugas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('petugas') }}">
      <i class="fas fa-fw fa-user-alt"></i>
      <span>Petugas</span></a>
  </li>
  <li class="nav-item {{ Request::is('dashboard/kelas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kelas') }}">
      <i class="fas fa-fw fa-school"></i>
      <span>Kelas</span></a>
  </li>
  <li class="nav-item" {{ Request::is('dashboard/spp*') ? 'active' : '' }}>
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-money-bill-wave"></i>
      <span>SPP</span></a>
  </li>
  <li class="nav-item {{ Request::is('dashboard/pembayaran*') ? 'active' : '' }}">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-file-invoice-dollar"></i>
      <span>Pembayaran</span></a>
  </li>
  <li class="nav-item {{ Request::is('dashboard/history*') ? 'active' : '' }}">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-history"></i>
      <span>History</span></a>
  </li>
  <li class="nav-item {{ Request::is('dashboard/laporan*') ? 'active' : '' }}">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-print"></i>
      <span>Laporan</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>