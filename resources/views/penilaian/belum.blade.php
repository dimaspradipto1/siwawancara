@extends('layouts.dashboard.template')

@section('content')
    {{-- Navbar --}}
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Belum Wawancara</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Belum Wawancara</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                {{-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div> --}}
                <ul class="navbar-nav justify-content-end ms-auto">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li class="nav-item ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    {{-- <li class="nav-item px-3 d-flex align-items-center">
                        <a href="#" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " />
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i> 13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 shadow-sm border-0" style="border-radius: 15px;">
                    <div class="card-header pb-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                        <h6 class="font-weight-bold mb-0 text-center text-md-start">Daftar Camaba Belum Diwawancara</h6>
                        <div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2">
                            <a href="{{ route('export.belum') }}" class="btn btn-sm btn-success mb-0 w-100 text-center">
                                <i class="fas fa-file-excel"></i> Export Excel
                            </a>
                            <span class="badge bg-uis-green py-2 w-100 text-center">Total: {{ $mahasiswas->count() }} Orang</span>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-4">
                            <table class="table align-items-center mb-0" id="table-belum">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NO</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Pendaftar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Mahasiswa</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prodi Pilihan 1</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prodi Pilihan 2</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jalur</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswas as $index => $m)
                                        <tr>
                                            <td class="ps-2">
                                                <span class="text-xs font-weight-bold">{{ $index + 1 }}</span>
                                            </td>
                                            <td class="ps-2">
                                                <span class="text-xs font-weight-bold">{{ $m->kode_pendaftar }}</span>
                                            </td>
                                            <td class="ps-2">
                                                <div class="d-flex py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $m->nama_mahasiswa }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $m->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ps-2">
                                                <span class="badge badge-sm bg-gradient-info">{{ $m->prodi_pilihan1 }}</span>
                                            </td>
                                            <td class="ps-2">
                                                <span class="badge badge-sm bg-gradient-secondary">{{ $m->prodi_pilihan2 }}</span>
                                            </td>
                                            <td class="ps-2">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $m->jalur_pendaftar }}</span>
                                            </td>
                                            <td class="ps-2">
                                                <a href="{{ route('penilaian.create', ['kode' => $m->kode_pendaftar]) }}"
                                                    class="btn btn-sm btn-dark text-white font-weight-bold text-xs mb-0" data-toggle="tooltip"
                                                    data-original-title="Nilai Sekarang">
                                                    <i class="fas fa-edit me-1"></i> Nilai
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table-belum').DataTable({
                "scrollX": true,
                "language": {
                    "paginate": {
                        "previous": "<i class='fas fa-angle-left'></i>",
                        "next": "<i class='fas fa-angle-right'></i>"
                    },
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ data",
                }
            });
        });
    </script>
@endpush
