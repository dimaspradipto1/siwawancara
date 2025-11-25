@extends('layouts.dashboard.template')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Mahasiswa</li>
                    </ol>
                <h6 class="font-weight-bolder mb-0">Edit Mahasiswa</h6>
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
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">Form Edit Mahasiswa</h6>
                                    </div>
                              
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                      
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="name">kode pendaftar</label>
                                          <input type="number" name="kode_pendaftar" class="form-control" value="{{ $mahasiswa->kode_pendaftar }}">
                                        </div>
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="name">Nama Mahasiswa</label>
                                          <input type="text" name="nama_mahasiswa" class="form-control" value="{{ $mahasiswa->nama_mahasiswa }}">
                                        </div>
                                      
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="jalur_pendaftar">Jalur Pendaftar</label>
                                          <select name="jalur_pendaftar" class="form-control">
                                        <option disabled>pilih jalur pendaftar</option>
                                          <option value="MANDIRI" {{ $mahasiswa->jalur_pendaftar == 'MANDIRI' ? 'selected' : '' }}>MANDIRI</option>
                                          <option value="MANDIRI ALUMNI" {{ $mahasiswa->jalur_pendaftar == 'MANDIRI ALUMNI' ? 'selected' : '' }}>MANDIRI ALUMNI</option>
                                          <option value="MANDIRI ALUMNI-S2" {{ $mahasiswa->jalur_pendaftar == 'MANDIRI ALUMNI-S2' ? 'selected' : '' }}>MANDIRI ALUMNI-S2</option>
                                          <option value="MANDIRI-S2" {{ $mahasiswa->jalur_pendaftar == 'MANDIRI-S2' ? 'selected' : '' }}>MANDIRI-S2</option>
                                          <option value="PRESTASI A" {{ $mahasiswa->jalur_pendaftar == 'PRESTASI A' ? 'selected' : '' }}>PRESTASI A</option>
                                          <option value="RPL PEROLEHAN SKS" {{ $mahasiswa->jalur_pendaftar == 'RPL PEROLEHAN SKS' ? 'selected' : '' }}>RPL PEROLEHAN SKS</option>
                                          <option value="RPL TRANSFER SKS" {{ $mahasiswa->jalur_pendaftar == 'RPL TRANSFER SKS' ? 'selected' : '' }}>RPL TRANSFER SKS</option>
                                        </select>
                                        </div>

                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="sistem_kuliah">Sistem Kuliah</label>
                                          <select name="sistem_kuliah" class="form-control">
                                            <option disabled>pilih sistem kuliah</option>
                                            <option value="Reguler A" {{ $mahasiswa->sistem_kuliah == 'Reguler A' ? 'selected' : '' }}>Reguler A</option>
                                            <option value="Reguler B" {{ $mahasiswa->sistem_kuliah == 'Reguler B' ? 'selected' : '' }}>Reguler B</option>
                                            <option value="Reguler C" {{ $mahasiswa->sistem_kuliah == 'Reguler C' ? 'selected' : '' }}>Reguler C</option>
                                        </select>
                                        </div>

                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="password">Prodi Pilihan 1</label>
                                          <select name="prodi_pilihan1" class="form-control">
                                            <option disabled>Pilih Prodi Pilihan 1</option>
                                            <option value="S1-Kesehatan dan Keleamatan Kerja" {{ $mahasiswa->prodi_pilihan1 == 'S1-Kesehatan dan Keleamatan Kerja' ? 'selected' : '' }}>S1-Kesehatan dan Keleamatan Kerja</option>
                                            <option value="S1-Kesehatan Lingkungan" {{ $mahasiswa->prodi_pilihan1 == 'S1-Kesehatan Lingkungan' ? 'selected' : '' }}>S1-Kesehatan Lingkungan</option>
                                            <option value="S1-S1 Akuntansi" {{ $mahasiswa->prodi_pilihan1 == 'S1-S1 Akuntansi' ? 'selected' : '' }}>S1-S1 Akuntansi</option>
                                            <option value="S1-S1 Manajemen" {{ $mahasiswa->prodi_pilihan1 == 'S1-S1 Manajemen' ? 'selected' : '' }}>S1-S1 Manajemen</option>
                                            <option value="S1-Sistem Informasi" {{ $mahasiswa->prodi_pilihan1 == 'S1-Sistem Informasi' ? 'selected' : '' }}>S1-Sistem Informasi</option>
                                            <option value="S1-Teknik Industri" {{ $mahasiswa->prodi_pilihan1 == 'S1-Teknik Industri' ? 'selected' : '' }}>S1-Teknik Industri</option>
                                            <option value="S1-Teknik Informatika" {{ $mahasiswa->prodi_pilihan1 == 'S1-Teknik Informatika' ? 'selected' : '' }}>S1-Teknik Informatika</option>
                                            <option value="S1-Teknik Logistik" {{ $mahasiswa->prodi_pilihan1 == 'S1-Teknik Logistik' ? 'selected' : '' }}>S1-Teknik Logistik</option>
                                            <option value="S1-Teknik Perkapalan" {{ $mahasiswa->prodi_pilihan1 == 'S1-Teknik Perkapalan' ? 'selected' : '' }}>S1-Teknik Perkapalan</option>
                                            <option value="S2-Magister Kesehatan Masyarakat" {{ $mahasiswa->prodi_pilihan1 == 'S2-Magister Kesehatan Masyarakat' ? 'selected' : '' }}>S2-Magister Kesehatan Masyarakat</option>
                                            <option value="S2-S2 Manajemen" {{ $mahasiswa->prodi_pilihan1 == 'S2-S2 Manajemen' ? 'selected' : '' }}>S2-S2 Manajemen</option>
                                          </select>
                                        </div>
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="password">Prodi Pilihan 2</label>
                                          <select name="prodi_pilihan2" class="form-control">
                                            <option disabled>Pilih Prodi Pilihan 2</option>
                                            <option value="S1-Kesehatan dan Keleamatan Kerja" {{ $mahasiswa->prodi_pilihan2 == 'S1-Kesehatan dan Keleamatan Kerja' ? 'selected' : '' }}>S1-Kesehatan dan Keleamatan Kerja</option>
                                            <option value="S1-Kesehatan Lingkungan" {{ $mahasiswa->prodi_pilihan2 == 'S1-Kesehatan Lingkungan' ? 'selected' : '' }}>S1-Kesehatan Lingkungan</option>    
                                            <option value="S1-S1 Akuntansi" {{ $mahasiswa->prodi_pilihan2 == 'S1-S1 Akuntansi' ? 'selected' : '' }}>S1-S1 Akuntansi</option>
                                            <option value="S1-S1 Manajemen" {{ $mahasiswa->prodi_pilihan2 == 'S1-S1 Manajemen' ? 'selected' : '' }}>S1-S1 Manajemen</option>
                                            <option value="S1-Sistem Informasi" {{ $mahasiswa->prodi_pilihan2 == 'S1-Sistem Informasi' ? 'selected' : '' }}>S1-Sistem Informasi</option>
                                            <option value="S1-Teknik Industri" {{ $mahasiswa->prodi_pilihan2 == 'S1-Teknik Industri' ? 'selected' : '' }}>S1-Teknik Industri</option>
                                            <option value="S1-Teknik Informatika" {{ $mahasiswa->prodi_pilihan2 == 'S1-Teknik Informatika' ? 'selected' : '' }}>S1-Teknik Informatika</option>
                                            <option value="S1-Teknik Logistik" {{ $mahasiswa->prodi_pilihan2 == 'S1-Teknik Logistik' ? 'selected' : '' }}>S1-Teknik Logistik</option>
                                            <option value="S1-Teknik Perkapalan" {{ $mahasiswa->prodi_pilihan2 == 'S1-Teknik Perkapalan' ? 'selected' : '' }}>S1-Teknik Perkapalan</option>
                                            <option value="S2-Magister Kesehatan Masyarakat" {{ $mahasiswa->prodi_pilihan2 == 'S2-Magister Kesehatan Masyarakat' ? 'selected' : '' }}>S2-Magister Kesehatan Masyarakat</option>
                                            <option value="S2-S2 Manajemen" {{ $mahasiswa->prodi_pilihan2 == 'S2-S2 Manajemen' ? 'selected' : '' }}>S2-S2 Manajemen</option>
                                          </select>
                                        </div>
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="password">Jenis Kelamin</label>
                                          <select name="jk" class="form-control" required>
                                            <option disabled>Pilih Jenis Kelamin</option>
                                            <option value="PRIA" {{ $mahasiswa->jk == 'PRIA' ? 'selected' : '' }}>PRIA</option>
                                            <option value="WANITA" {{ $mahasiswa->jk == 'WANITA' ? 'selected' : '' }}>WANITA</option>
                                          </select>
                                        </div>
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="password">No Whatsapp</label>
                                          <input type="number" name="nowa" value="{{ $mahasiswa->nowa }}" class="form-control" required>
                                        </div>  
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="password">Email</label>
                                          <input type="email" name="email" value="{{ $mahasiswa->email }}" class="form-control" required>
                                        </div>
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="password">Alamat</label>
                                         <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control">{{ $mahasiswa->alamat }}</textarea>
                                        </div>
                                        <div class="col-md-12 mb-md-0 mb-4">
                                          <label for="password">Status Pekerjaan</label>
                                          <select name="status_pekerjaan" class="form-control">
                                            <option>Pilih Status Pekerjaan</option>
                                            <option value="BELUM BEKERJA" {{ $mahasiswa->status_pekerjaan == 'BELUM BEKERJA' ? 'selected' : '' }}>Belum Bekerja</option>
                                            <option value="BEKERJA" {{ $mahasiswa->status_pekerjaan == 'BEKERJA' ? 'selected' : '' }}>BEKERJA</option>
                                            <option value="GURU" {{ $mahasiswa->status_pekerjaan == 'GURU' ? 'selected' : '' }}>GURU</option>
                                            <option value="IBU RUMAH TANGGA" {{ $mahasiswa->status_pekerjaan == 'IBU RUMAH TANGGA' ? 'selected' : '' }}>IBU RUMAH TANGGA</option>
                                            <option value="MAGANG" {{ $mahasiswa->status_pekerjaan == 'MAGANG' ? 'selected' : '' }}>MAGANG</option>
                                            <option value="PELAJAR" {{ $mahasiswa->status_pekerjaan == 'PELAJAR' ? 'selected' : '' }}>PELAJAR</option>
                                            <option value="PNS" {{ $mahasiswa->status_pekerjaan == 'PNS' ? 'selected' : '' }}>PNS</option>
                                            <option value="TENAGA PENGAJAR/INSTRUKTUR/FASILITATOR" {{ $mahasiswa->status_pekerjaan == 'TENAGA PENGAJAR/INSTRUKTUR/FASILITATOR' ? 'selected' : '' }}>TENAGA PENGAJAR/INSTRUKTUR/FASILITATOR</option>
                                            <option value="TIDAK BEKERJA" {{ $mahasiswa->status_pekerjaan == 'TIDAK BEKERJA' ? 'selected' : '' }}>TIDAK BEKERJA</option>
                                            <option value="WIRASWASTA" {{ $mahasiswa->status_pekerjaan == 'WIRASWASTA' ? 'selected' : '' }}>WIRASWASTA</option>
                                          </select>
                                        </div>
                                      
                                        <div class="col-12 text-start py-3">
                                          <button type="submit" class="btn btn-dark text-white text-uppercase">update</button>
                                          <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger text-white text-uppercase">kembali</a>
                                        </div>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
