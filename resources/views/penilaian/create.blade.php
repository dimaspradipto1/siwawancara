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
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
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
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
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
                        <a href="{{ route('penilaian.index') }}" class="btn btn-danger text-white text-capitalize"><i
                            class="fa-solid fa-arrow-left"></i> Kembali ke halaman penilaian</a>
                    </div>
                    <div class="card-header pb-0">
                        <img src="{{ asset('dashboard/assets/img/header.png') }}" alt=""
                            width="1160" class="img-fluid mx-auto d-block">
                        <hr>
                        <h3 class="text-center text-uppercase text-bold">data peserta</h3>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body">
                                <form role="form text-left" action="{{ route('penilaian.store') }}"
                                    method="POST" id="pendaftarForm">
                                    @csrf

                                    <table class="table mb-3">
                                        <tbody>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold" style="width: 10%;">Kode Pendaftar</td>
                                                <td>
                                                    <input type="number" class="form-control" name="kode_pendaftar" id="kode_pendaftar" placeholder="Kode Pendaftar" style="max-width: 800px;" autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Mahasiswa ID</td>
                                                <td>
                                                    <input type="text" class="form-control" name="mahasiswa_id" id="mahasiswa_id" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Nama Pendaftar</td>
                                                <td>
                                                    <input type="text" class="form-control" name="nama_mahasiswa" placeholder="nama pendaftar" id="nama_mahasiswa" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Jalur Pendaftar</td>
                                                <td>
                                                    <input type="text" class="form-control" name="jalur_pendaftar" id="jalur_pendaftar" placeholder="jalur pendaftar" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Sistem Kuliah</td>
                                                <td>
                                                    <input type="text" class="form-control" name="sistem_kuliah" id="sistem_kuliah" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Prodi Pilihan 1</td>
                                                <td>
                                                    <input type="text" class="form-control" name="prodi_pilihan1" id="prodi_pilihan1" placeholder="prodi pilihan 1" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Prodi Pilihan 2</td>
                                                <td>
                                                    <input type="text" class="form-control" name="prodi_pilihan2" id="prodi_pilihan2" placeholder="prodi pilihan 2" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Jenis Kelamin</td>
                                                <td>
                                                    <input type="text" class="form-control" name="jk" id="jk" placeholder="jenis kelamin" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Nomor HP</td>
                                                <td>
                                                    <input type="text" class="form-control" name="nowa" id="nowa" placeholder="no hp" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Email</td>
                                                <td>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="email" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Alamat</td>
                                                <td>
                                                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" style="max-width: 800px;" placeholder="alamat" readonly></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-weight-bold">Status Pekerjaan</td>
                                                <td>
                                                    <input type="text" class="form-control" name="status_pekerjaan" id="status_pekerjaan" placeholder="status pekerjaan" style="max-width: 800px;" readonly>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <hr>
                                    <h3 class="text-center text-uppercase text-bold">penilaian wawancara</h3>
                                    <p class="text-left text-capitalize text-bold text-danger">Silahkan isi nilai sesuai
                                        bobot penilaian</p>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 mt-4">
                                            <div class="card">

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">1. Motivasi, Tujuan Studi, dan
                                                        Pemahaman Program Studi</h6>
                                                    <input type="number" class="form-control indikator" name="indikator1"
                                                        id="indikator1" class="indikator" placeholder="bobot" aria-label="indikator1"
                                                        aria-describedby="email-addon" style="max-width: 100px;"
                                                        min="1" max="5">
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            <div class="d-flex flex-grow-1">
                                                                <!-- Kolom kiri (Indikator Penilaian) -->
                                                                <div class="flex-fill">
                                                                    <h6
                                                                        class="font-weight-bold text-uppercase text-danger">
                                                                        Indikator Penilaian:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-xs font-weight-bold">Memiliki
                                                                        alasan yang kuat dalam memilih program studi,
                                                                        memahami prospek karier, dan menunjukkan antusiasme
                                                                        tinggi terhadap bidangnya.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Memiliki
                                                                        alasan yang cukup jelas dalam memilih program studi,
                                                                        tetapi masih perlu pemahaman lebih mendalam tentang
                                                                        prospek karier.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Alasan
                                                                        memilih program studi masih kurang jelas dan
                                                                        pemahaman tentang prospek karier terbatas.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Memilih
                                                                        program studi tanpa alasan yang kuat dan kurang
                                                                        memiliki pemahaman tentang bidang yang dipilih.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Tidak
                                                                        memiliki alasan yang jelas dalam memilih program
                                                                        studi dan menunjukkan kurangnya minat serta motivasi
                                                                        belajar.</p>
                                                                </div>

                                                                <!-- Kolom kanan (Bobot) -->
                                                                <div class="ms-3 text-end">
                                                                    <h6
                                                                        class="font-weight-bold text-danger text-uppercase">
                                                                        bobot:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-center">5</p>
                                                                    <p class="text-dark text-center">4</p>
                                                                    <p class="text-dark text-center">3</p>
                                                                    <p class="text-dark text-center">2</p>
                                                                    <p class="text-dark text-center">1</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">2. Kesiapan Akademik dan
                                                        Kesiapan Mengikuti Peraturan Akademik</h6>
                                                    <input type="number" class="form-control indikator" name="indikator2"
                                                        id="indikator2" class="indikator" placeholder="bobot" aria-label="indikator1"
                                                        aria-describedby="email-addon" style="max-width: 100px;"
                                                        min="1" max="5">
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            <div class="d-flex flex-grow-1">
                                                                <!-- Kolom kiri (Indikator Penilaian) -->
                                                                <div class="flex-fill">
                                                                    <h6
                                                                        class="font-weight-bold text-uppercase text-danger">
                                                                        Indikator Penilaian:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-xs font-weight-bold">Memiliki
                                                                        pengetahuan dasar yang kuat terkait bidang studi
                                                                        yang dipilih dan siap mengikuti aturan akademik
                                                                        perguruan tinggi.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">
                                                                        Mengetahui dasar-dasar yang relevan dengan bidang
                                                                        studi dan sudah memiliki pemahaman yang baik tentang
                                                                        peraturan akademik.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Memiliki
                                                                        pengetahuan dasar yang cukup, tetapi masih perlu
                                                                        lebih banyak persiapan dalam memahami aturan
                                                                        akademik.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">
                                                                        Pengetahuan dasar yang dimiliki masih terbatas dan
                                                                        belum sepenuhnya siap mengikuti peraturan akademik.
                                                                    </p>
                                                                    <p class="text-dark text-xs font-weight-bold">Tidak
                                                                        memiliki pengetahuan dasar yang cukup dan tidak
                                                                        menunjukkan kesiapan untuk mengikuti peraturan
                                                                        akademik.</p>
                                                                </div>

                                                                <!-- Kolom kanan (Bobot) -->
                                                                <div class="ms-3 text-end">
                                                                    <h6
                                                                        class="font-weight-bold text-danger text-uppercase">
                                                                        bobot:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-center">5</p>
                                                                    <p class="text-dark text-center">4</p>
                                                                    <p class="text-dark text-center">3</p>
                                                                    <p class="text-dark text-center">2</p>
                                                                    <p class="text-dark text-center">1</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">3. Komitmen, Keseriusan, dan
                                                        Kemandirian dalam Kuliah</h6>
                                                    <input type="number" class="form-control indikator" name="indikator3"
                                                        id="indikator3" class="indikator" placeholder="bobot" aria-label="indikator1"
                                                        aria-describedby="email-addon" style="max-width: 100px;"
                                                        min="1" max="5">
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            <div class="d-flex flex-grow-1">
                                                                <!-- Kolom kiri (Indikator Penilaian) -->
                                                                <div class="flex-fill">
                                                                    <h6
                                                                        class="font-weight-bold text-uppercase text-danger">
                                                                        Indikator Penilaian:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-xs font-weight-bold">
                                                                        Menunjukkan komitmen dan keseriusan tinggi dalam
                                                                        kuliah, serta memiliki kemampuan belajar mandiri
                                                                        yang baik dan mampu mengambil inisiatif dalam
                                                                        kegiatan akademik.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">
                                                                        Menunjukkan komitmen yang baik dalam kuliah dan
                                                                        memiliki kemampuan belajar mandiri meskipun perlu
                                                                        sedikit bimbingan.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">
                                                                        Menunjukkan komitmen yang cukup baik, tetapi
                                                                        kemampuan mandiri dan inisiatif dalam kuliah masih
                                                                        terbatas.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">
                                                                        Menunjukkan komitmen yang rendah dalam kuliah dan
                                                                        kurang memiliki kemampuan belajar mandiri serta
                                                                        inisiatif.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Tidak
                                                                        menunjukkan komitmen yang cukup terhadap kuliah dan
                                                                        kurang memiliki kemampuan untuk belajar mandiri atau
                                                                        mengambil inisiatif.</p>
                                                                </div>

                                                                <!-- Kolom kanan (Bobot) -->
                                                                <div class="ms-3 text-end">
                                                                    <h6
                                                                        class="font-weight-bold text-danger text-uppercase">
                                                                        bobot:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-center">5</p>
                                                                    <p class="text-dark text-center">4</p>
                                                                    <p class="text-dark text-center">3</p>
                                                                    <p class="text-dark text-center">2</p>
                                                                    <p class="text-dark text-center">1</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">4. Kepribadian, Etika, dan
                                                        Kemampuan Berkomunikasi</h6>
                                                    <input type="number" class="form-control indikator" name="indikator4"
                                                        id="indikator4" class="indikator" placeholder="bobot" aria-label="indikator1"
                                                        aria-describedby="email-addon" style="max-width: 100px;"
                                                        min="1" max="5">
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            <div class="d-flex flex-grow-1">
                                                                <!-- Kolom kiri (Indikator Penilaian) -->
                                                                <div class="flex-fill">
                                                                    <h6
                                                                        class="font-weight-bold text-uppercase text-danger">
                                                                        Indikator Penilaian:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-xs font-weight-bold">
                                                                        Menunjukkan sikap yang sangat baik, nilai-nilai
                                                                        moral yang tinggi, dan kemampuan komunikasi yang
                                                                        sangat efektif.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Memiliki
                                                                        sikap yang baik, nilai-nilai moral yang positif, dan
                                                                        kemampuan komunikasi yang cukup baik.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Memiliki
                                                                        sikap yang cukup baik, tetapi kemampuan komunikasi
                                                                        dan nilai-nilai moralnya masih perlu pengembangan.
                                                                    </p>
                                                                    <p class="text-dark text-xs font-weight-bold">Sikap dan
                                                                        nilai-nilai moral yang dimiliki cukup biasa, dengan
                                                                        kemampuan komunikasi yang masih terbatas.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Memiliki
                                                                        sikap yang kurang baik, nilai-nilai moral yang
                                                                        rendah, dan kemampuan komunikasi yang tidak memadai.
                                                                    </p>
                                                                </div>

                                                                <!-- Kolom kanan (Bobot) -->
                                                                <div class="ms-3 text-end">
                                                                    <h6
                                                                        class="font-weight-bold text-danger text-uppercase">
                                                                        bobot:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-center">5</p>
                                                                    <p class="text-dark text-center">4</p>
                                                                    <p class="text-dark text-center">3</p>
                                                                    <p class="text-dark text-center">2</p>
                                                                    <p class="text-dark text-center">1</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">5. Kesiapan Finansial</h6>
                                                    <input type="number" class="form-control indikator" name="indikator5"
                                                        id="indikator5" class="indikator" placeholder="bobot" aria-label="indikator1"
                                                        aria-describedby="email-addon" style="max-width: 100px;"
                                                        min="1" max="5">
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            <div class="d-flex flex-grow-1">
                                                                <!-- Kolom kiri (Indikator Penilaian) -->
                                                                <div class="flex-fill">
                                                                    <h6
                                                                        class="font-weight-bold text-uppercase text-danger">
                                                                        Indikator Penilaian:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-xs font-weight-bold">Memiliki
                                                                        semangat tinggi untuk menyelesaikan studi tanpa
                                                                        hambatan finansial dan sudah memiliki perencanaan
                                                                        finansial yang matang.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Cukup
                                                                        siap secara finansial, meskipun masih ada beberapa
                                                                        ketidakpastian.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Cukup
                                                                        baik untuk menyelesaikan studi, tetapi kesiapan
                                                                        finansial masih perlu perhatian lebih.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Sikap dan
                                                                        nilai-nilai moral yang dimiliki cukup biasa, dengan
                                                                        kemampuan komunikasi yang masih terbatas.Cukup
                                                                        rendah dan kesiapan finansial terbatas atau tidak
                                                                        terencana dengan baik.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Tidak
                                                                        menunjukkan kesiapan finansial yang memadai</p>
                                                                </div>

                                                                <!-- Kolom kanan (Bobot) -->
                                                                <div class="ms-3 text-end">
                                                                    <h6
                                                                        class="font-weight-bold text-danger text-uppercase">
                                                                        bobot:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-center">5</p>
                                                                    <p class="text-dark text-center">4</p>
                                                                    <p class="text-dark text-center">3</p>
                                                                    <p class="text-dark text-center">2</p>
                                                                    <p class="text-dark text-center">1</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0" style="margin: 0;">6. Adaptasi terhadap Lingkungan
                                                        Kampus</h6>
                                                    <input type="number" class="form-control indikator" name="indikator6"
                                                        id="indikator6" class="indikator" placeholder="bobot" aria-label="indikator1"
                                                        aria-describedby="email-addon" style="max-width: 100px;"
                                                        min="1" max="5">
                                                </div>
                                                <div class="card-body pt-4 p-3">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                            <div class="d-flex flex-grow-1">
                                                                <!-- Kolom kiri (Indikator Penilaian) -->
                                                                <div class="flex-fill">
                                                                    <h6
                                                                        class="font-weight-bold text-uppercase text-danger">
                                                                        Indikator Penilaian:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-xs font-weight-bold">Sangat
                                                                        siap untuk menyesuaikan diri dengan lingkungan
                                                                        kampus, baik dalam sistem pembelajaran maupun
                                                                        interaksi sosial.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Cukup
                                                                        siap untuk beradaptasi dengan lingkungan kampus,
                                                                        meskipun ada beberapa tantangan yang mungkin
                                                                        dihadapi.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">
                                                                        Menunjukkan kesiapan yang cukup dalam beradaptasi,
                                                                        tetapi perlu waktu lebih lama untuk menyesuaikan
                                                                        diri.</p>
                                                                    <p class="text-dark text-xs font-weight-bold">Adaptasi
                                                                        terhadap lingkungan kampus kurang baik dan mungkin
                                                                        membutuhkan banyak waktu untuk menyesuaikan diri.
                                                                    </p>
                                                                    <p class="text-dark text-xs font-weight-bold">Tidak
                                                                        menunjukkan kesiapan untuk beradaptasi dengan
                                                                        lingkungan kampus dan kurang siap dalam hal
                                                                        interaksi sosial atau pembelajaran.</p>
                                                                </div>

                                                                <!-- Kolom kanan (Bobot) -->
                                                                <div class="ms-3 text-end">
                                                                    <h6
                                                                        class="font-weight-bold text-danger text-uppercase">
                                                                        bobot:</h6>
                                                                    <hr>
                                                                    <p class="text-dark text-center">5</p>
                                                                    <p class="text-dark text-center">4</p>
                                                                    <p class="text-dark text-center">3</p>
                                                                    <p class="text-dark text-center">2</p>
                                                                    <p class="text-dark text-center">1</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-header pb-0 px-3 text-uppercase"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0 text-info" style="margin: 0;">total point</h6>
                                                    <input type="number" class="form-control" name="total_nilai"
                                                        class="indikator" placeholder="total_nilai point" aria-label="total_nilai"
                                                        id="total_nilai" aria-describedby="email-addon"
                                                        style="max-width: 120px;">
                                                </div>
                                                <div class="card-header pb-0 px-3 mb-2 text-uppercase"
                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                    <h6 class="mb-0 text-success" style="margin: 0;">nilai akhir ( TOTAL
                                                        POINT/30*100)</h6>
                                                    <input type="text" class="form-control" name="nilai_akhir"
                                                        class="indikator" placeholder="nilai akhir" aria-label="nilai_akhir"
                                                        id="nilai_akhir" aria-describedby="email-addon"
                                                        style="max-width: 120px;">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-4">
                                            <div class="card h-100 mb-4">
                                                <div class="card-header pb-0 px-3">
                                                    <div class="mb-3">
                                                        <label for="prestasi_akademik"
                                                            class=" text-uppercase">prestasi akademik nonakademik</label>
                                                            <p class="text-danger" style="font-size: 10px; font-style: bold; margin-top: -5px;">*wajib diisi</p>
                                                        <textarea name="prestasi_akademik" id="" cols="30" rows="3" class="form-control"
                                                            placeholder="prestasi akademik dan nonakademik"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nilai_keislaman" class=" text-uppercase">nilai
                                                            keislaman</label>
                                                            <p class="text-danger" style="font-size: 10px; font-style: bold; margin-top: -5px;">*wajib diisi</p>
                                                        <textarea name="nilai_keislaman" id="" cols="30" rows="3" class="form-control"
                                                            placeholder="nilai keislaman"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="komentar_interviewer" class=" text-uppercase">komentar
                                                            interviewer</label><br>
                                                            <p class="text-danger" style="font-size: 10px; font-style: bold; margin-top: -5px;">*wajib diisi</p>
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
                        var pendaftarData = response.data[0]; // Ambil data pertama dari hasil query
                        $('input[name="mahasiswa_id"]').val(pendaftarData.id);
                        $('input[name="nama_mahasiswa"]').val(pendaftarData.nama_mahasiswa);
                        $('input[name="jalur_pendaftar"]').val(pendaftarData.jalur_pendaftar);
                        $('input[name="sistem_kuliah"]').val(pendaftarData.sistem_kuliah);
                        $('input[name="prodi_pilihan1"]').val(pendaftarData.prodi_pilihan1);
                        $('input[name="prodi_pilihan2"]').val(pendaftarData.prodi_pilihan2);
                        $('input[name="jk"]').val(pendaftarData.jk);
                        $('input[name="nowa"]').val(pendaftarData.nowa);
                        $('input[name="email"]').val(pendaftarData.email);
                        $('textarea[name="alamat"]').val(pendaftarData.alamat);
                        $('input[name="status_pekerjaan"]').val(pendaftarData.status_pekerjaan);
                    } else {
                        kosongkanForm();
                    }
                },
                error: function() {
                    alert("Terjadi kesalahan. Silakan coba lagi.");
                    kosongkanForm();
                }
            });
        } else {
            kosongkanForm(); // Jika input kosong, kosongkan form
        }
    });

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
    $('.indikator').on('input', function() {
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
        var nilaiAkhir = ((totalPoints / 30) * 100).toFixed(2).replace(',', '.'); // Mengganti koma dengan titik
        $('#nilai_akhir').val(nilaiAkhir);
    });
});

</script>
@endpush

