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
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Cari mahasiswa...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
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
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 shadow-sm border-0" style="border-radius: 15px;">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="font-weight-bold">Daftar Camaba Belum Diwawancara</h6>
                        <span class="badge bg-danger">Total: {{ $mahasiswas->count() }} Orang</span>
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
