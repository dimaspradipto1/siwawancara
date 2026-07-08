@extends('layouts.dashboard.template')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail Mahasiswa</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Detail Mahasiswa</h6>
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0 text-uppercase">Detail Penilaian</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Kode Pendaftar</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->kode_pendaftar }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Mahasiswa</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->nama_mahasiswa }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jalur Pendaftar</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->jalur_pendaftar }}</td>
                                            </tr>
                                            <tr>
                                                <td>Sistem Kuliah</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->sistem_kuliah }}</td>
                                            </tr>
                                            <tr>
                                                <td>Prodi Pilihan 1</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->prodi_pilihan1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>Prodi Pilihan 2</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->prodi_pilihan2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->jk }}</td>
                                            </tr>
                                            <tr>
                                                <td>No Whatsapp</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->nowa }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td>Status Pekerjaan</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->mahasiswa->status_pekerjaan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Point</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td class="badge bg-success p-2 my-2 mx-2 px-4 py-2 text-white"> {{ $penilaian->total_point }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nilai Akhir</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td class="badge bg-dark p-2 my-2 mx-2 px-4 py-2"> {{ $penilaian->nilai_akhir }}</td>
                                            </tr>
                                            <tr>
                                                <td>Prestasi Akademik</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->prestasi_akademik }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nilai Keislaman</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->nilai_keislaman }}</td>
                                            </tr>
                                            <tr>
                                                <td>Komentar Interviewer</td>
                                                <td class="text-center">:</td>
                                                <br>
                                                <td>{{ $penilaian->komentar_interviewer }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-12 text-start py-3">
                                        <a href="{{ route('penilaian.index') }}"
                                            class="btn btn-danger text-white text-uppercase">kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
