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
                    <li class="nav-item ps-3 d-flex align-items-center">
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
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="{{ route('mahasiswa.index') }}" class="text-decoration-none">
                    <div class="card h-100 stat-card" style="border-left: 4px solid #344767; border-radius: 12px; transition: all 0.3s ease;">
                        <div class="card-body d-flex align-items-center gap-2 gap-md-3 py-3">
                            <div class="d-flex align-items-center justify-content-center rounded-circle text-white"
                                style="width:48px;height:48px;width:md-56px;height:md-56px;background:linear-gradient(135deg,#344767,#627594);flex-shrink:0;">
                                <i class="fas fa-users fa-sm fa-md-lg"></i>
                            </div>
                            <div class="overflow-hidden">
                                <p class="text-xxs text-md-xs font-weight-bold text-uppercase text-secondary mb-1 text-truncate">Total Mahasiswa</p>
                                <h4 class="font-weight-bolder mb-0 fs-6 fs-md-4 text-dark" id="stat-total-mahasiswa">{{ number_format($totalMahasiswa) }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Sudah Wawancara --}}
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="{{ route('penilaian.index') }}" class="text-decoration-none">
                    <div class="card h-100 stat-card" style="border-left: 4px solid #2dce89; border-radius: 12px; transition: all 0.3s ease;">
                        <div class="card-body d-flex align-items-center gap-2 gap-md-3 py-3">
                            <div class="d-flex align-items-center justify-content-center rounded-circle text-white"
                                style="width:48px;height:48px;width:md-56px;height:md-56px;background:linear-gradient(135deg,#2dce89,#1aae6f);flex-shrink:0;">
                                <i class="fas fa-check-circle fa-sm fa-md-lg"></i>
                            </div>
                            <div class="overflow-hidden">
                                <p class="text-xxs text-md-xs font-weight-bold text-uppercase text-secondary mb-1 text-truncate">Sudah Wawancara</p>
                                <h4 class="font-weight-bolder mb-0 fs-6 fs-md-4 text-dark" id="stat-sudah-wawancara">{{ number_format($sudahWawancara) }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Belum Wawancara --}}
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="{{ route('penilaian.belum') }}" class="text-decoration-none">
                    <div class="card h-100 stat-card" style="border-left: 4px solid #f5365c; border-radius: 12px; transition: all 0.3s ease;">
                        <div class="card-body d-flex align-items-center gap-2 gap-md-3 py-3">
                            <div class="d-flex align-items-center justify-content-center rounded-circle text-white"
                                style="width:48px;height:48px;width:md-56px;height:md-56px;background:linear-gradient(135deg,#f5365c,#c8063d);flex-shrink:0;">
                                <i class="fas fa-clock fa-sm fa-md-lg"></i>
                            </div>
                            <div class="overflow-hidden">
                                <p class="text-xxs text-md-xs font-weight-bold text-uppercase text-secondary mb-1 text-truncate">Belum Wawancara</p>
                                <h4 class="font-weight-bolder mb-0 fs-6 fs-md-4 text-dark" id="stat-belum-wawancara">{{ number_format($belumWawancara) }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {{-- End Stat Cards --}}

        {{-- Faculty Stats --}}
        <div class="row mb-4">
            {{-- FEB --}}
            <div class="col-lg-4 col-md-4 mb-4">
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
                            $febProdis = ['S1 - S1 Manajemen', 'S1 - S1 Akuntansi', 'S2 - S2 Manajemen'];
                            $febTotalAll = 0;
                            $febSudahAll = 0;
                            $febBelumAll = 0;
                        @endphp
                        @foreach ($febProdis as $prodi)
                            @php
                                $sudah = $prodiCounts[$prodi] ?? 0;
                                $belum = $prodiBelumCounts[$prodi] ?? 0;
                                $total = $sudah + $belum;
                                $febTotalAll += $total;
                                $febSudahAll += $sudah;
                                $febBelumAll += $belum;
                                $slug = Str::slug($prodi);
                            @endphp
                            <div class="d-flex justify-content-between align-items-start mb-2 p-2 bg-light rounded-3">
                                <span class="text-xs font-weight-bold text-dark me-2">{{ $prodi }}</span>
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
                        {{-- Total FEB --}}
                        <div class="d-flex justify-content-between align-items-center mt-3 p-2 bg-dark rounded-3">
                            <span class="text-xs font-weight-bold text-white me-2">TOTAL FEB</span>
                            <div class="d-flex gap-1">
                                <span class="badge bg-secondary rounded-pill" id="total-feb-all">{{ $febTotalAll }}</span>
                                <span class="badge bg-success rounded-pill" id="sudah-feb-all">{{ $febSudahAll }}</span>
                                <span class="badge bg-danger text-white rounded-pill" id="belum-feb-all">{{ $febBelumAll }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- FST --}}
            <div class="col-lg-4 col-md-4 mb-4">
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
                            $fstTotalAll = 0;
                            $fstSudahAll = 0;
                            $fstBelumAll = 0;
                        @endphp
                        @foreach ($fstProdis as $prodi)
                            @php
                                $sudah = $prodiCounts[$prodi] ?? 0;
                                $belum = $prodiBelumCounts[$prodi] ?? 0;
                                $total = $sudah + $belum;
                                $fstTotalAll += $total;
                                $fstSudahAll += $sudah;
                                $fstBelumAll += $belum;
                                $slug = Str::slug($prodi);
                            @endphp
                            <div class="d-flex justify-content-between align-items-start mb-2 p-2 bg-light rounded-3">
                                <span class="text-xs font-weight-bold text-dark me-2">{{ $prodi }}</span>
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
                        {{-- Total FST --}}
                        <div class="d-flex justify-content-between align-items-center mt-3 p-2 bg-dark rounded-3">
                            <span class="text-xs font-weight-bold text-white me-2">TOTAL FST</span>
                            <div class="d-flex gap-1">
                                <span class="badge bg-secondary rounded-pill" id="total-fst-all">{{ $fstTotalAll }}</span>
                                <span class="badge bg-success rounded-pill" id="sudah-fst-all">{{ $fstSudahAll }}</span>
                                <span class="badge bg-danger text-white rounded-pill" id="belum-fst-all">{{ $fstBelumAll }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- FIKES --}}
            <div class="col-lg-4 col-md-4 mb-4">
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
                            $fikesProdis = ['S1 - Kesehatan dan Keselamatan Kerja', 'S1 - Kesehatan Lingkungan', 'S2 - Magister Kesehatan Masyarakat'];
                            $fikesTotalAll = 0;
                            $fikesSudahAll = 0;
                            $fikesBelumAll = 0;
                        @endphp
                        @foreach ($fikesProdis as $prodi)
                            @php
                                $sudah = $prodiCounts[$prodi] ?? 0;
                                $belum = $prodiBelumCounts[$prodi] ?? 0;
                                $total = $sudah + $belum;
                                $fikesTotalAll += $total;
                                $fikesSudahAll += $sudah;
                                $fikesBelumAll += $belum;
                                $slug = Str::slug($prodi);
                            @endphp
                            <div class="d-flex justify-content-between align-items-start mb-2 p-2 bg-light rounded-3">
                                <span class="text-xs font-weight-bold text-dark me-2">{{ $prodi }}</span>
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
                        {{-- Total FIKES --}}
                        <div class="d-flex justify-content-between align-items-center mt-3 p-2 bg-dark rounded-3">
                            <span class="text-xs font-weight-bold text-white me-2">TOTAL FIKES</span>
                            <div class="d-flex gap-1">
                                <span class="badge bg-secondary rounded-pill" id="total-fikes-all">{{ $fikesTotalAll }}</span>
                                <span class="badge bg-success rounded-pill" id="sudah-fikes-all">{{ $fikesSudahAll }}</span>
                                <span class="badge bg-danger text-white rounded-pill" id="belum-fikes-all">{{ $fikesBelumAll }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Faculty Stats --}}

        {{-- Interviewer Stats --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center" style="background-color: #17a2b8;">
                        <h6 class="text-white mb-0 font-weight-bold">Rekapitulasi Interviewer</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row" id="interviewer-stats-container">
                            @foreach ($interviewerStats as $stat)
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="p-3 bg-light rounded-3 border h-100">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="text-sm font-weight-bold text-dark text-truncate" title="{{ $stat['name'] }}">{{ $stat['name'] }}</span>
                                            <span class="badge bg-primary rounded-pill">{{ $stat['total'] }}</span>
                                        </div>
                                        <hr class="my-2">
                                        <div class="d-flex flex-column gap-1">
                                            @foreach ($stat['prodis'] as $prodi)
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-xs text-secondary text-truncate" title="{{ $prodi['prodi'] }}"><i class="fas fa-chevron-right me-1 text-xxs"></i> {{ $prodi['prodi'] }}</span>
                                                    <span class="text-xs font-weight-bold text-dark">{{ $prodi['count'] }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Interviewer Stats --}}

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
    <style>
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
        .stat-card {
            cursor: pointer;
        }
    </style>
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

                    // Update prodi stats and calculate faculty totals
                    const febProdis = ['S1 - S1 Manajemen', 'S1 - S1 Akuntansi', 'S2 - S2 Manajemen'];
                    const fstProdis = [
                        'S1 - Teknik Industri', 'S1 - Teknik Informatika',
                        'S1 - Teknik Perkapalan', 'S1 - Teknik Logistik',
                        'S1 - Sistem Informasi'
                    ];
                    const fikesProdis = [
                        'S1 - Kesehatan dan Keselamatan Kerja', 
                        'S1 - Kesehatan Lingkungan',
                        'S2 - Magister Kesehatan Masyarakat'
                    ];

                    let febT = 0, febS = 0, febB = 0;
                    let fstT = 0, fstS = 0, fstB = 0;
                    let fikesT = 0, fikesS = 0, fikesB = 0;

                    const allProdis = [...febProdis, ...fstProdis, ...fikesProdis];

                    allProdis.forEach(prodi => {
                        const slug = prodi.toLowerCase().replace(/[^a-z0-9]/g, '-').replace(/-+/g, '-')
                            .replace(/^-|-$/g, '');
                        const sudah = data.prodiCounts[prodi] || 0;
                        const belum = data.prodiBelumCounts[prodi] || 0;
                        const total = sudah + belum;

                        $(`#total-${slug}`).text(total);
                        $(`#sudah-${slug}`).text(sudah);
                        $(`#belum-${slug}`).text(belum);

                        // Accumulate faculty totals
                        if (febProdis.includes(prodi)) {
                            febT += total; febS += sudah; febB += belum;
                        } else if (fstProdis.includes(prodi)) {
                            fstT += total; fstS += sudah; fstB += belum;
                        } else if (fikesProdis.includes(prodi)) {
                            fikesT += total; fikesS += sudah; fikesB += belum;
                        }
                    });

                    // Update Faculty Summary UI
                    $('#total-feb-all').text(febT);
                    $('#sudah-feb-all').text(febS);
                    $('#belum-feb-all').text(febB);

                    $('#total-fst-all').text(fstT);
                    $('#sudah-fst-all').text(fstS);
                    $('#belum-fst-all').text(fstB);

                    $('#total-fikes-all').text(fikesT);
                    $('#sudah-fikes-all').text(fikesS);
                    $('#belum-fikes-all').text(fikesB);

                    // Update Interviewer Stats
                    if (data.interviewerStats) {
                        let interviewerHtml = '';
                        data.interviewerStats.forEach(stat => {
                            let prodiHtml = '';
                            stat.prodis.forEach(prodi => {
                                prodiHtml += `
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-xs text-secondary text-truncate" title="${prodi.prodi}"><i class="fas fa-chevron-right me-1 text-xxs"></i> ${prodi.prodi}</span>
                                        <span class="text-xs font-weight-bold text-dark">${prodi.count}</span>
                                    </div>
                                `;
                            });

                            interviewerHtml += `
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="p-3 bg-light rounded-3 border h-100">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="text-sm font-weight-bold text-dark text-truncate" title="${stat.name}">${stat.name}</span>
                                            <span class="badge bg-primary rounded-pill">${stat.total}</span>
                                        </div>
                                        <hr class="my-2">
                                        <div class="d-flex flex-column gap-1">
                                            ${prodiHtml}
                                        </div>
                                    </div>
                                </div>
                            `;
                        });
                        $('#interviewer-stats-container').html(interviewerHtml);
                    }
                },
                error: function(err) {
                    console.error("Gagal memperbarui statistik:", err);
                }
            });
        }

        // Jalankan setiap 1 detik
        setInterval(updateDashboardStats, 1000);
    </script>
@endpush
