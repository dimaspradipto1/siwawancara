@extends('layouts.dashboard.template')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah Penilaian</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Tambah Penilaian</h6>
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
            <div class="col-12">
                <div class="card mb-4">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('penilaian.index') }}" class="btn btn-uis-green text-white text-capitalize"><i
                                class="fa-solid fa-arrow-left"></i> Kembali ke halaman penilaian</a>
                    </div>
                    <div class="card-header pb-0">
                        <img src="{{ asset('assets/img/header.png') }}" alt="" width="1160"
                            class="img-fluid mx-auto d-block">
                        <hr>
                        <h3 class="text-center text-uppercase text-bold">data peserta</h3>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body">
                                <form role="form text-left" action="{{ route('penilaian.store') }}" method="POST"
                                    id="pendaftarForm">
                                    @csrf

                                    <div class="data-peserta-form">

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Kode
                                                    Pendaftar</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="number" class="form-control" name="kode_pendaftar"
                                                        id="kode_pendaftar" placeholder="Kode Pendaftar"
                                                        style="max-width: 800px;" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Mahasiswa ID</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="mahasiswa_id"
                                                        id="mahasiswa_id" style="max-width: 800px;" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Nama Pendaftar</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="nama_mahasiswa"
                                                        placeholder="nama pendaftar" id="nama_mahasiswa"
                                                        style="max-width: 800px;" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Jalur Pendaftar</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="jalur_pendaftar"
                                                        id="jalur_pendaftar" placeholder="jalur pendaftar"
                                                        style="max-width: 800px;" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Sistem Kuliah</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="sistem_kuliah"
                                                        id="sistem_kuliah" style="max-width: 800px;" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Prodi Pilihan 1</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="prodi_pilihan1"
                                                        id="prodi_pilihan1" placeholder="prodi pilihan 1"
                                                        style="max-width: 800px;" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Prodi Pilihan 2</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="prodi_pilihan2"
                                                        id="prodi_pilihan2" placeholder="prodi pilihan 2"
                                                        style="max-width: 800px;" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Jenis Kelamin</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="jk"
                                                        id="jk" placeholder="jenis kelamin"
                                                        style="max-width: 800px;" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Nomor HP</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="nowa"
                                                        id="nowa" placeholder="no hp" style="max-width: 800px;"
                                                        readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Email</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="email" style="max-width: 800px;"
                                                        readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Alamat</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"
                                                        style="max-width: 800px;" placeholder="alamat" readonly></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3 col-12 mb-2 mb-md-0">
                                            <label class="text-uppercase font-weight-bold mb-0">Status Pekerjaan</label>
                                        </div>
                                        <div class="col-md-9 col-12">
                                            <input type="text" class="form-control" name="status_pekerjaan"
                                                        id="status_pekerjaan" placeholder="status pekerjaan"
                                                        style="max-width: 800px;" readonly>
                                        </div>
                                    </div>
                                    </div>

                                    <hr>
                                    <h3 class="text-start text-uppercase text-bold">penilaian wawancara</h3>
                                    <p class="text-start text-capitalize text-bold text-uis-green">Silahkan isi nilai sesuai
                                        bobot penilaian</p>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 mt-4">
                                            <div class="card">

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">1. Motivasi, Tujuan Studi, dan
                                                        Pemahaman Program Studi</h6>
                                                    <select class="form-control indikator" name="indikator1" id="indikator1"
                                                        style="max-width: 100px;">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            
                                                                <div class="w-100">
                                                                    <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                                                                        <h6 class="font-weight-bold text-uppercase text-uis-green mb-0">Indikator Penilaian:</h6>
                                                                        <h6 class="font-weight-bold text-uis-green text-uppercase mb-0 text-center" style="width: 80px;">bobot:</h6>
                                                                    </div>
                                                                    
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memiliki
                                                                        alasan yang kuat dalam memilih program studi,
                                                                        memahami prospek karier, dan menunjukkan antusiasme
                                                                        tinggi terhadap bidangnya.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">5</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memiliki
                                                                        alasan yang cukup jelas dalam memilih program studi,
                                                                        tetapi masih perlu pemahaman lebih mendalam tentang
                                                                        prospek karier.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">4</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Alasan
                                                                        memilih program studi masih kurang jelas dan
                                                                        pemahaman tentang prospek karier terbatas.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">3</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memilih
                                                                        program studi tanpa alasan yang kuat dan kurang
                                                                        memiliki pemahaman tentang bidang yang dipilih.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">2</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Tidak
                                                                        memiliki alasan yang jelas dalam memilih program
                                                                        studi dan menunjukkan kurangnya minat serta motivasi
                                                                        belajar.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">1</span>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">2. Kesiapan Akademik dan
                                                        Kesiapan Mengikuti Peraturan Akademik</h6>
                                                    <select class="form-control indikator" name="indikator2" id="indikator2"
                                                        style="max-width: 100px;">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            
                                                                <div class="w-100">
                                                                    <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                                                                        <h6 class="font-weight-bold text-uppercase text-uis-green mb-0">Indikator Penilaian:</h6>
                                                                        <h6 class="font-weight-bold text-uis-green text-uppercase mb-0 text-center" style="width: 80px;">bobot:</h6>
                                                                    </div>
                                                                    
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memiliki
                                                                        pengetahuan dasar yang kuat terkait bidang studi
                                                                        yang dipilih dan siap mengikuti aturan akademik
                                                                        perguruan tinggi.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">5</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Mengetahui dasar-dasar yang relevan dengan bidang
                                                                        studi dan sudah memiliki pemahaman yang baik tentang
                                                                        peraturan akademik.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">4</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memiliki
                                                                        pengetahuan dasar yang cukup, tetapi masih perlu
                                                                        lebih banyak persiapan dalam memahami aturan
                                                                        akademik.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">3</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Pengetahuan dasar yang dimiliki masih terbatas dan
                                                                        belum sepenuhnya siap mengikuti peraturan akademik.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">2</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Tidak
                                                                        memiliki pengetahuan dasar yang cukup dan tidak
                                                                        menunjukkan kesiapan untuk mengikuti peraturan
                                                                        akademik.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">1</span>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">3. Komitmen, Keseriusan, dan
                                                        Kemandirian dalam Kuliah</h6>
                                                    <select class="form-control indikator" name="indikator3" id="indikator3"
                                                        style="max-width: 100px;">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            
                                                                <div class="w-100">
                                                                    <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                                                                        <h6 class="font-weight-bold text-uppercase text-uis-green mb-0">Indikator Penilaian:</h6>
                                                                        <h6 class="font-weight-bold text-uis-green text-uppercase mb-0 text-center" style="width: 80px;">bobot:</h6>
                                                                    </div>
                                                                    
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Menunjukkan komitmen dan keseriusan tinggi dalam
                                                                        kuliah, serta memiliki kemampuan belajar mandiri
                                                                        yang baik dan mampu mengambil inisiatif dalam
                                                                        kegiatan akademik.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">5</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Menunjukkan komitmen yang baik dalam kuliah dan
                                                                        memiliki kemampuan belajar mandiri meskipun perlu
                                                                        sedikit bimbingan.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">4</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Menunjukkan komitmen yang cukup baik, tetapi
                                                                        kemampuan mandiri dan inisiatif dalam kuliah masih
                                                                        terbatas.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">3</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Menunjukkan komitmen yang rendah dalam kuliah dan
                                                                        kurang memiliki kemampuan belajar mandiri serta
                                                                        inisiatif.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">2</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Tidak
                                                                        menunjukkan komitmen yang cukup terhadap kuliah dan
                                                                        kurang memiliki kemampuan untuk belajar mandiri atau
                                                                        mengambil inisiatif.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">1</span>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">4. Kepribadian, Etika, dan
                                                        Kemampuan Berkomunikasi</h6>
                                                    <select class="form-control indikator" name="indikator4" id="indikator4"
                                                        style="max-width: 100px;">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            
                                                                <div class="w-100">
                                                                    <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                                                                        <h6 class="font-weight-bold text-uppercase text-uis-green mb-0">Indikator Penilaian:</h6>
                                                                        <h6 class="font-weight-bold text-uis-green text-uppercase mb-0 text-center" style="width: 80px;">bobot:</h6>
                                                                    </div>
                                                                    
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Menunjukkan sikap yang sangat baik, nilai-nilai
                                                                        moral yang tinggi, dan kemampuan komunikasi yang
                                                                        sangat efektif.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">5</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memiliki
                                                                        sikap yang baik, nilai-nilai moral yang positif, dan
                                                                        kemampuan komunikasi yang cukup baik.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">4</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memiliki
                                                                        sikap yang cukup baik, tetapi kemampuan komunikasi
                                                                        dan nilai-nilai moralnya masih perlu pengembangan.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">3</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Sikap dan
                                                                        nilai-nilai moral yang dimiliki cukup biasa, dengan
                                                                        kemampuan komunikasi yang masih terbatas.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">2</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memiliki
                                                                        sikap yang kurang baik, nilai-nilai moral yang
                                                                        rendah, dan kemampuan komunikasi yang tidak memadai.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">1</span>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">5. Kesiapan Finansial</h6>
                                                    <select class="form-control indikator" name="indikator5" id="indikator5"
                                                        style="max-width: 100px;">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            
                                                                <div class="w-100">
                                                                    <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                                                                        <h6 class="font-weight-bold text-uppercase text-uis-green mb-0">Indikator Penilaian:</h6>
                                                                        <h6 class="font-weight-bold text-uis-green text-uppercase mb-0 text-center" style="width: 80px;">bobot:</h6>
                                                                    </div>
                                                                    
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Memiliki
                                                                        semangat tinggi untuk menyelesaikan studi tanpa
                                                                        hambatan finansial dan sudah memiliki perencanaan
                                                                        finansial yang matang.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">5</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Cukup
                                                                        siap secara finansial, meskipun masih ada beberapa
                                                                        ketidakpastian.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">4</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Cukup
                                                                        baik untuk menyelesaikan studi, tetapi kesiapan
                                                                        finansial masih perlu perhatian lebih.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">3</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Sikap dan
                                                                        nilai-nilai moral yang dimiliki cukup biasa, dengan
                                                                        kemampuan komunikasi yang masih terbatas.Cukup
                                                                        rendah dan kesiapan finansial terbatas atau tidak
                                                                        terencana dengan baik.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">2</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Tidak
                                                                        menunjukkan kesiapan finansial yang memadai</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">1</span>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">6. Adaptasi terhadap Lingkungan
                                                        Kampus</h6>
                                                    <select class="form-control indikator" name="indikator6" id="indikator6"
                                                        style="max-width: 100px;">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            
                                                                <div class="w-100">
                                                                    <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                                                                        <h6 class="font-weight-bold text-uppercase text-uis-green mb-0">Indikator Penilaian:</h6>
                                                                        <h6 class="font-weight-bold text-uis-green text-uppercase mb-0 text-center" style="width: 80px;">bobot:</h6>
                                                                    </div>
                                                                    
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Sangat
                                                                        siap untuk menyesuaikan diri dengan lingkungan
                                                                        kampus, baik dalam sistem pembelajaran maupun
                                                                        interaksi sosial.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">5</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Cukup
                                                                        siap untuk beradaptasi dengan lingkungan kampus,
                                                                        meskipun ada beberapa tantangan yang mungkin
                                                                        dihadapi.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">4</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Menunjukkan kesiapan yang cukup dalam beradaptasi,
                                                                        tetapi perlu waktu lebih lama untuk menyesuaikan
                                                                        diri.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">3</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Adaptasi
                                                                        terhadap lingkungan kampus kurang baik dan mungkin
                                                                        membutuhkan banyak waktu untuk menyesuaikan diri.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">2</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <p class="text-dark text-xs font-weight-bold mb-0 flex-fill me-3">Tidak
                                                                        menunjukkan kesiapan untuk beradaptasi dengan
                                                                        lingkungan kampus dan kurang siap dalam hal
                                                                        interaksi sosial atau pembelajaran.</p>
                                                                        <span class="badge bg-primary px-3 py-2 fs-6">1</span>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3 text-uppercase"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0 text-info" style="margin: 0;">total point</h6>
                                                    <input type="number" class="form-control" name="total_nilai"
                                                        class="indikator" placeholder="total_nilai point"
                                                        aria-label="total_nilai" id="total_nilai"
                                                        aria-describedby="email-addon" style="max-width: 120px;">
                                                </div>
                                                <div class="card-header pb-0 px-3 mb-2 text-uppercase"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0 text-success" style="margin: 0;">nilai akhir ( TOTAL
                                                        POINT/30*100)</h6>
                                                    <input type="text" class="form-control" name="nilai_akhir"
                                                        class="indikator" placeholder="nilai akhir"
                                                        aria-label="nilai_akhir" id="nilai_akhir"
                                                        aria-describedby="email-addon" style="max-width: 120px;">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-4">
                                            <div class="card h-100 mb-4">
                                                <div class="card-header pb-0 px-3">
                                                    <div class="mb-3">
                                                        <label for="prestasi_akademik" class=" text-uppercase">prestasi
                                                            akademik nonakademik</label>
                                                        <p class="text-danger"
                                                            style="font-size: 10px; font-style: bold; margin-top: -5px;">
                                                            *wajib diisi</p>
                                                        <textarea name="prestasi_akademik" id="" cols="30" rows="3" class="form-control"
                                                            placeholder="prestasi akademik dan nonakademik"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nilai_keislaman" class=" text-uppercase">nilai
                                                            keislaman</label>
                                                        <p class="text-danger"
                                                            style="font-size: 10px; font-style: bold; margin-top: -5px;">
                                                            *wajib diisi</p>
                                                        <textarea name="nilai_keislaman" id="" cols="30" rows="3" class="form-control"
                                                            placeholder="nilai keislaman"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="komentar_interviewer" class=" text-uppercase">komentar
                                                            interviewer</label><br>
                                                        <p class="text-danger"
                                                            style="font-size: 10px; font-style: bold; margin-top: -5px;">
                                                            *wajib diisi</p>
                                                        <textarea name="komentar_interviewer" id="" cols="30" rows="3" class="form-control"
                                                            placeholder="komentar interviewer"></textarea>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                            class="btn bg-gradient-success w-100 my-4 mb-2 text-uppercase ">submit</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <table>
                                        <thead>
                                            <th></th>
                                        </thead>
                                    </table> --}}
                                    {{-- <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-gradient-success w-100 my-4 mb-2 text-uppercase ">submit</button>
                                        </div> --}}

                                </form>
                            </div>
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
            // Auto-search if 'kode' is in URL
            var urlParams = new URLSearchParams(window.location.search);
            var kode = urlParams.get('kode');
            if (kode) {
                $('#kode_pendaftar').val(kode).trigger('input');
            }

            // Menangani perubahan pada input kode pendaftar
            $('#kode_pendaftar').on('input', function() {
                var kodePendaftar = $(this).val(); // Ambil nilai dari input kode_pendaftar

                if (kodePendaftar) {
                    $.ajax({
                        url: '/penilaian/cariPendaftar', // URL untuk mendapatkan data berdasarkan kode_pendaftar
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}', // Kirim CSRF token untuk keamanan
                            kode_pendaftar: kodePendaftar // Kirim kode_pendaftar ke server
                        },
                        success: function(response) {
                            // Jika data ditemukan, isi form dengan data yang dikembalikan
                            if (response.success) {
                                var pendaftarData = response.data[
                                    0]; // Ambil data pertama dari hasil query
                                $('input[name="mahasiswa_id"]').val(pendaftarData.id);
                                $('input[name="nama_mahasiswa"]').val(pendaftarData
                                    .nama_mahasiswa);
                                $('input[name="jalur_pendaftar"]').val(pendaftarData
                                    .jalur_pendaftar);
                                $('input[name="sistem_kuliah"]').val(pendaftarData
                                    .sistem_kuliah);
                                $('input[name="prodi_pilihan1"]').val(pendaftarData
                                    .prodi_pilihan1);
                                $('input[name="prodi_pilihan2"]').val(pendaftarData
                                    .prodi_pilihan2);
                                $('input[name="jk"]').val(pendaftarData.jk);
                                $('input[name="nowa"]').val(pendaftarData.nowa);
                                $('input[name="email"]').val(pendaftarData.email);
                                $('textarea[name="alamat"]').val(pendaftarData.alamat);
                                $('input[name="status_pekerjaan"]').val(pendaftarData
                                    .status_pekerjaan);

                                // Cek apakah mahasiswa sudah pernah dinilai
                                checkExistingPenilaian(pendaftarData.id);
                            } else {
                                kosongkanForm();
                                enableSubmitButton();
                            }
                        },
                        error: function() {
                            alert("Terjadi kesalahan. Silakan coba lagi.");
                            kosongkanForm();
                            enableSubmitButton();
                        }
                    });
                } else {
                    kosongkanForm(); // Jika input kosong, kosongkan form
                    enableSubmitButton();
                }
            });

            // Fungsi untuk mengecek apakah mahasiswa sudah pernah dinilai
            function checkExistingPenilaian(mahasiswaId) {
                $.ajax({
                    url: '/penilaian/checkExisting',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        mahasiswa_id: mahasiswaId
                    },
                    success: function(response) {
                        if (response.exists) {
                            // Tampilkan peringatan dan disable tombol submit
                            showWarningMessage('Mahasiswa ini sudah pernah dinilai!');
                            disableSubmitButton();
                        } else {
                            hideWarningMessage();
                            enableSubmitButton();
                        }
                    },
                    error: function() {
                        console.error('Gagal mengecek penilaian existing');
                        enableSubmitButton();
                    }
                });
            }

            // Fungsi untuk menampilkan pesan peringatan
            function showWarningMessage(message) {
                // Hapus pesan lama jika ada
                $('.penilaian-warning').remove();

                // Tambahkan pesan peringatan
                var warningHtml =
                    '<div class="alert alert-danger alert-dismissible fade show penilaian-warning text-white" role="alert">' +
                    '<strong>Peringatan!</strong> ' + message +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>';
                $('#pendaftarForm').prepend(warningHtml);
            }

            // Fungsi untuk menyembunyikan pesan peringatan
            function hideWarningMessage() {
                $('.penilaian-warning').remove();
            }

            // Fungsi untuk disable tombol submit
            function disableSubmitButton() {
                $('button[type="submit"]').prop('disabled', true).addClass('disabled');
            }

            // Fungsi untuk enable tombol submit
            function enableSubmitButton() {
                $('button[type="submit"]').prop('disabled', false).removeClass('disabled');
            }

            // Fungsi untuk mengosongkan form jika tidak ada data yang ditemukan
            function kosongkanForm() {
                $('input[name="mahasiswa_id"]').val('');
                $('input[name="nama_mahasiswa"]').val('');
                $('input[name="kode_pendaftar"]').val('');
                $('input[name="jalur_pendaftar"]').val('');
                $('input[name="sistem_kuliah"]').val('');
                $('input[name="prodi_pilihan1"]').val('');
                $('input[name="prodi_pilihan2"]').val('');
                $('input[name="jk"]').val('');
                $('input[name="nowa"]').val('');
                $('input[name="email"]').val('');
                $('textarea[name="alamat"]').val('');
                $('input[name="status_pekerjaan"]').val('');
            }

            // Menangani perubahan nilai indikator
            $('.indikator').on('change input', function() {
                // Menghitung total nilai berdasarkan indikator
                var totalPoints = 0;

                // Menjumlahkan nilai dari indikator 1 sampai indikator 6
                for (var i = 1; i <= 6; i++) {
                    var indikatorValue = $('#indikator' + i).val();
                    if (indikatorValue) {
                        totalPoints += parseInt(indikatorValue);
                    }
                }

                // Menampilkan total nilai di form
                $('#total_nilai').val(totalPoints);

                // Menghitung nilai akhir berdasarkan total nilai
                var nilaiAkhir = ((totalPoints / 30) * 100).toFixed(2).replace(',',
                    '.'); // Mengganti koma dengan titik
                $('#nilai_akhir').val(nilaiAkhir);
            });
        });
    </script>
@endpush
