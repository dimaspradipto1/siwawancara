@extends('layouts.dashboard.template')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="row g-3">
            <div class="col-xl-3 col-md-6">
                <a href="{{ route('mahasiswa.index') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="bg-gradient-primary text-white rounded-3 d-flex align-items-center justify-content-center"
                                style="width:56px; height:56px;">
                                <i class="fas fa-users fa-lg"></i>
                            </div>
                            <div>
                                <p class="text-xs text-uppercase text-secondary mb-1">Total Mahasiswa</p>
                                <h4 class="mb-0 text-dark">{{ number_format($totalMahasiswa) }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="{{ route('penilaian.index') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="bg-gradient-success text-white rounded-3 d-flex align-items-center justify-content-center"
                                style="width:56px; height:56px;">
                                <i class="fas fa-check-circle fa-lg"></i>
                            </div>
                            <div>
                                <p class="text-xs text-uppercase text-secondary mb-1">Sudah Wawancara</p>
                                <h4 class="mb-0 text-dark">{{ number_format($totalPenilaian) }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="{{ route('penilaian.belum') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="bg-gradient-danger text-white rounded-3 d-flex align-items-center justify-content-center"
                                style="width:56px; height:56px;">
                                <i class="fas fa-clock fa-lg"></i>
                            </div>
                            <div>
                                <p class="text-xs text-uppercase text-secondary mb-1">Belum Wawancara</p>
                                <h4 class="mb-0 text-dark">{{ number_format($belumWawancara) }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="{{ route('user.index') }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="bg-gradient-warning text-white rounded-3 d-flex align-items-center justify-content-center"
                                style="width:56px; height:56px;">
                                <i class="fas fa-user fa-lg"></i>
                            </div>
                            <div>
                                <p class="text-xs text-uppercase text-secondary mb-1">Total Pengguna</p>
                                <h4 class="mb-0 text-dark">{{ number_format($totalUsers) }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-4 g-3">
            <div class="col-lg-7">
                <div class="card shadow-sm border-0 rounded-4 h-100">
                    <div class="card-body p-4">
                        <div class="d-flex flex-column h-100 justify-content-between">
                            <div>
                                <h5 class="font-weight-bolder">Selamat Datang di Dashboard SIWAWANCARA</h5>
                                <p class="text-secondary mt-3 mb-4" style="line-height:1.8;">Kelola proses wawancara dengan
                                    cepat dan jelas. Gunakan menu di sisi kiri untuk mengakses data mahasiswa, formulir
                                    penilaian, daftar penilaian, dan peserta yang belum diwawancara.</p>
                            </div>
                            <div class="row gx-2">
                                <div class="col-6">
                                    <div class="card bg-light border-0 rounded-4 p-3">
                                        <p class="text-xs text-uppercase text-secondary mb-1">Interviewer</p>
                                        <h5 class="mb-0">{{ number_format($totalInterviewers) }}</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card bg-light border-0 rounded-4 p-3">
                                        <p class="text-xs text-uppercase text-secondary mb-1">Belum Terproses</p>
                                        <h5 class="mb-0">{{ number_format($belumWawancara) }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                    <div class="bg-dark p-4 h-100 position-relative"
                        style="background-image: url('{{ asset('assets/img/ivancik.jpg') }}'); background-size: cover; background-position: center;">
                        <span class="mask bg-gradient-dark opacity-80"></span>
                        <div class="position-relative text-white h-100 d-flex flex-column justify-content-center">
                            <h5 class="text-white font-weight-bolder">Visi & Misi</h5>
                            <p class="text-white opacity-85">Unggul, Berintegritas, Berjiwa Entrepreneurship.</p>
                            <p class="text-white opacity-85">Dashboard ini membantu tim untuk memantau pelaksanaan wawancara
                                secara profesional dan terkini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
