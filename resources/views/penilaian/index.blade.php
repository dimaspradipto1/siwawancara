@extends('layouts.dashboard.template')

@section('content')
    {{-- Navbar --}}
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Penilaian</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Penilaian</h6>
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Content --}}
    <div class="container-fluid py-4">

        {{-- Stat Cards --}}
        <div class="row mb-4 g-3">
            {{-- Total Mahasiswa --}}
            <div class="col-xl-4 col-sm-6">
                <div class="card h-100" style="border-left: 4px solid #344767; border-radius: 12px;">
                    <div class="card-body d-flex align-items-center gap-3 py-3">
                        <div class="d-flex align-items-center justify-content-center rounded-circle text-white"
                            style="width:56px;height:56px;background:linear-gradient(135deg,#344767,#627594);flex-shrink:0;">
                            <i class="fas fa-users fa-lg"></i>
                        </div>
                        <div>
                            <p class="text-xs font-weight-bold text-uppercase text-secondary mb-1">Total Mahasiswa</p>
                            <h4 class="font-weight-bolder mb-0" id="stat-total-mahasiswa">{{ number_format($totalMahasiswa) }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sudah Wawancara --}}
            <div class="col-xl-4 col-sm-6">
                <div class="card h-100" style="border-left: 4px solid #2dce89; border-radius: 12px;">
                    <div class="card-body d-flex align-items-center gap-3 py-3">
                        <div class="d-flex align-items-center justify-content-center rounded-circle text-white"
                            style="width:56px;height:56px;background:linear-gradient(135deg,#2dce89,#1aae6f);flex-shrink:0;">
                            <i class="fas fa-check-circle fa-lg"></i>
                        </div>
                        <div>
                            <p class="text-xs font-weight-bold text-uppercase text-secondary mb-1">Sudah Wawancara</p>
                            <h4 class="font-weight-bolder mb-0" id="stat-sudah-wawancara">{{ number_format($sudahWawancara) }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Belum Wawancara --}}
            <div class="col-xl-4 col-sm-6">
                <div class="card h-100" style="border-left: 4px solid #f5365c; border-radius: 12px;">
                    <div class="card-body d-flex align-items-center gap-3 py-3">
                        <div class="d-flex align-items-center justify-content-center rounded-circle text-white"
                            style="width:56px;height:56px;background:linear-gradient(135deg,#f5365c,#c8063d);flex-shrink:0;">
                            <i class="fas fa-clock fa-lg"></i>
                        </div>
                        <div>
                            <p class="text-xs font-weight-bold text-uppercase text-secondary mb-1">Belum Wawancara</p>
                            <h4 class="font-weight-bolder mb-0" id="stat-belum-wawancara">{{ number_format($belumWawancara) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Stat Cards --}}

        {{-- Faculty Stats --}}
        <div class="row mb-4">
            {{-- FEB --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background-color: #F5A423;">
                        <h6 class="text-white mb-0 font-weight-bold">FEB</h6>
                        <div class="text-xs text-white-50">
                            <span class="badge bg-secondary me-1">T</span> Total
                            <span class="badge bg-success ms-2 me-1">S</span> Sudah
                            <span class="badge bg-danger text-white ms-2">B</span> Belum
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @php
                            $febProdis = ['S1 - S1 Manajemen', 'S1 - S1 Akuntansi'];
                        @endphp
                        @foreach ($febProdis as $prodi)
                            @php
                                $sudah = $prodiCounts[$prodi] ?? 0;
                                $belum = $prodiBelumCounts[$prodi] ?? 0;
                                $total = $sudah + $belum;
                                $slug = Str::slug($prodi);
                            @endphp
                            <div class="d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded-3">
                                <span class="text-xs font-weight-bold text-dark text-truncate"
                                    style="max-width: 150px;">{{ $prodi }}</span>
                                <div class="d-flex gap-1">
                                    <span class="badge bg-secondary rounded-pill prodi-total" id="total-{{ $slug }}"
                                        title="Total Mahasiswa">{{ $total }}</span>
                                    <span class="badge bg-success rounded-pill prodi-sudah" id="sudah-{{ $slug }}"
                                        title="Sudah Wawancara">{{ $sudah }}</span>
                                    <span class="badge bg-danger text-white rounded-pill prodi-belum"
                                        id="belum-{{ $slug }}" title="Belum Wawancara">{{ $belum }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- FST --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background-color: #2C583F;">
                        <h6 class="text-white mb-0 font-weight-bold">FST</h6>
                        <div class="text-xs text-white-50">
                            <span class="badge bg-secondary me-1">T</span> Total
                            <span class="badge bg-success ms-2 me-1">S</span> Sudah
                            <span class="badge bg-danger text-white ms-2">B</span> Belum
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @php
                            $fstProdis = [
                                'S1 - Teknik Industri',
                                'S1 - Teknik Informatika',
                                'S1 - Teknik Perkapalan',
                                'S1 - Teknik Logistik',
                                'S1 - Sistem Informasi',
                            ];
                        @endphp
                        @foreach ($fstProdis as $prodi)
                            @php
                                $sudah = $prodiCounts[$prodi] ?? 0;
                                $belum = $prodiBelumCounts[$prodi] ?? 0;
                                $total = $sudah + $belum;
                                $slug = Str::slug($prodi);
                            @endphp
                            <div class="d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded-3">
                                <span class="text-xs font-weight-bold text-dark text-truncate"
                                    style="max-width: 150px;">{{ $prodi }}</span>
                                <div class="d-flex gap-1">
                                    <span class="badge bg-secondary rounded-pill prodi-total" id="total-{{ $slug }}"
                                        title="Total Mahasiswa">{{ $total }}</span>
                                    <span class="badge bg-success rounded-pill prodi-sudah" id="sudah-{{ $slug }}"
                                        title="Sudah Wawancara">{{ $sudah }}</span>
                                    <span class="badge bg-danger text-white rounded-pill prodi-belum"
                                        id="belum-{{ $slug }}" title="Belum Wawancara">{{ $belum }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- FIKES --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background-color: #4534A5;">
                        <h6 class="text-white mb-0 font-weight-bold">FIKES</h6>
                        <div class="text-xs text-white-50">
                            <span class="badge bg-secondary me-1">T</span> Total
                            <span class="badge bg-success ms-2 me-1">S</span> Sudah
                            <span class="badge bg-danger text-white ms-2">B</span> Belum
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @php
                            $fikesProdis = ['S1 - Kesehatan dan Keselamatan Kerja', 'S1 - Kesehatan Lingkungan'];
                        @endphp
                        @foreach ($fikesProdis as $prodi)
                            @php
                                $sudah = $prodiCounts[$prodi] ?? 0;
                                $belum = $prodiBelumCounts[$prodi] ?? 0;
                                $total = $sudah + $belum;
                                $slug = Str::slug($prodi);
                            @endphp
                            <div class="d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded-3">
                                <span class="text-xs font-weight-bold text-dark text-truncate"
                                    style="max-width: 150px;">{{ $prodi }}</span>
                                <div class="d-flex gap-1">
                                    <span class="badge bg-secondary rounded-pill prodi-total" id="total-{{ $slug }}"
                                        title="Total Mahasiswa">{{ $total }}</span>
                                    <span class="badge bg-success rounded-pill prodi-sudah" id="sudah-{{ $slug }}"
                                        title="Sudah Wawancara">{{ $sudah }}</span>
                                    <span class="badge bg-danger text-white rounded-pill prodi-belum"
                                        id="belum-{{ $slug }}" title="Belum Wawancara">{{ $belum }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- End Faculty Stats --}}

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex align-items-center justify-content-end gap-2">
                        <div class="dropdown">
                            <button class="btn btn-dark text-white text-uppercase d-flex align-items-center gap-2"
                                type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-plus"></i> Pilih Aksi <i class="fas fa-chevron-down ms-1"></i>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="actionDropdown"
                                style="min-width: 220px;">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 text-dark"
                                        href="{{ route('penilaian.create') }}">
                                        <i class="fas fa-plus text-dark"></i>
                                        Tambah Penilaian
                                    </a>
                                </li>
                                @if (Auth::user()->is_admin || Auth::user()->is_timtes)
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-2 text-success"
                                            href="{{ route('export') }}" target="_blank">
                                            <i class="fas fa-file-excel text-success"></i>
                                            Export Excel
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            {{ $dataTable->table([
                                'class' => 'table table-striped table-bordered table-hover text-nowrap',
                                'style' => 'width:100%;',
                            ]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Content --}}
@endsection


@push('scripts')
    @if (app()->environment('production'))
        {!! str_replace('http:', 'https:', $dataTable->scripts()) !!}
    @else
        {!! $dataTable->scripts() !!}
    @endif

    <script>
        function updateDashboardStats() {
            $.ajax({
                url: "{{ route('penilaian.get-stats') }}",
                method: "GET",
                success: function(data) {
                    // Update main summary cards
                    $('#stat-total-mahasiswa').text(data.totalMahasiswa);
                    $('#stat-sudah-wawancara').text(data.sudahWawancara);
                    $('#stat-belum-wawancara').text(data.belumWawancara);

                    // Update prodi stats
                    const allProdis = [
                        'S1 - S1 Manajemen', 'S1 - S1 Akuntansi',
                        'S1 - Teknik Industri', 'S1 - Teknik Informatika',
                        'S1 - Teknik Perkapalan', 'S1 - Teknik Logistik',
                        'S1 - Sistem Informasi',
                        'S1 - Kesehatan dan Keselamatan Kerja', 'S1 - Kesehatan Lingkungan'
                    ];

                    allProdis.forEach(prodi => {
                        const slug = prodi.toLowerCase().replace(/[^a-z0-9]/g, '-').replace(/-+/g, '-')
                            .replace(/^-|-$/g, '');
                        const sudah = data.prodiCounts[prodi] || 0;
                        const belum = data.prodiBelumCounts[prodi] || 0;
                        const total = sudah + belum;

                        $(`#total-${slug}`).text(total);
                        $(`#sudah-${slug}`).text(sudah);
                        $(`#belum-${slug}`).text(belum);
                    });
                },
                error: function(err) {
                    console.error("Gagal memperbarui statistik:", err);
                }
            });
        }

        // Jalankan setiap 10 detik
        setInterval(updateDashboardStats, 10000);
    </script>
@endpush
