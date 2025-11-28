@extends('layouts.dashboard.template')

@section('content')
    {{-- Navbar --}}
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Mahasiswa</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Mahasiswa</h6>
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
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex align-items-center justify-content-end gap-2">
                        {{-- <a href="{{ route('mahasiswa.create') }}" class="btn btn-dark text-white text-uppercase"><i
                                class="fa-solid fa-plus"></i> Tambah Mahasiswa</a>
                        <a href="javascript:;" class="btn btn-success text-white text-uppercase" data-bs-toggle="modal"
                            data-bs-target="#importModal"><i class="fa-solid fa-file-excel"></i> Import</a>

                        <button id="btn-delete-selected" class="btn btn-danger text-white text-uppercase">
                            <i class="fa-solid fa-trash"></i> Hapus Terpilih
                        </button>

                        <button id="btn-delete-all" class="btn btn-warning text-white text-uppercase">
                            <i class="fa-solid fa-trash-can"></i> Hapus Semua
                        </button> --}}

                        <div class="dropdown">
                            <button class="btn btn-dark text-white text-uppercase dropdown-toggle d-flex align-items-center gap-2"
                                    type="button"
                                    id="actionDropdown"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-plus"></i> Pilih Aksi
                            </button>

                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="actionDropdown" style="min-width: 220px;">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 text-dark"
                                       href="{{ route('mahasiswa.create') }}">
                                        <i class="fa-solid fa-plus text-dark"></i>
                                        Tambah Mahasiswa
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 text-success"
                                       href="javascript:;"
                                       data-bs-toggle="modal"
                                       data-bs-target="#importModal">
                                        <i class="fa-solid fa-file-excel text-success"></i>
                                        Import Excel
                                    </a>
                                </li>

                                <li><hr class="dropdown-divider"></li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 text-dark"
                                       href="javascript:;"
                                       id="btn-delete-selected">
                                        <i class="fa-solid fa-trash"></i>
                                        Hapus Terpilih
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                       href="javascript:;"
                                       id="btn-delete-all">
                                        <i class="fa-solid fa-trash-can"></i>
                                        Hapus Semua
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Modal Import -->
                    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="importModalLabel">Import Mahasiswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('mahasiswa.import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="excel_file" class="form-label">Pilih File Excel Mahasiswa</label>
                                            <input type="file" class="form-control" name="excel_file" id="excel_file"
                                                required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Import</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Import -->

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            {{ $dataTable->table([
                                'style' => 'width:100%; overflow-x: auto',
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
    {!! str_replace('http:', 'https:', $dataTable->scripts()) !!}
    {{-- {!! $dataTable->scripts() !!} --}}
    <script>
        $(function() {
	    const table = $('#mahasiswa-table').DataTable();

            // SELECT ALL
            $(document).on('change', '#select-all', function() {
                $('.row-checkbox').prop('checked', this.checked);
            });

            // sync select-all
            $(document).on('change', '.row-checkbox', function() {
                const total = $('.row-checkbox').length;
                const checked = $('.row-checkbox:checked').length;
                $('#select-all').prop('checked', total > 0 && total === checked);
            });

            // redraw => reset
            table.on('draw', function() {
                $('#select-all').prop('checked', false);
            });

            // DELETE SELECTED
            $('#btn-delete-selected').on('click', function() {
                let ids = $('.row-checkbox:checked').map(function() {
                    return $(this).val();
                }).get();

                if (ids.length === 0) {
                    alert('Pilih minimal 1 data dulu.');
                    return;
                }

                if (!confirm('Yakin hapus data terpilih?')) return;

                $.ajax({
                    url: "/mahasiswa/bulk-delete",
                    type: "POST",
                    dataType: "json",
                    data: {
                        ids: ids,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        table.ajax.reload(null, false);
                        alert(res.message);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        alert('Gagal hapus data terpilih.');
                    }
                });
            });

            // DELETE ALL
            $('#btn-delete-all').on('click', function() {
                if (!confirm('Yakin hapus SEMUA data?')) return;

                $.ajax({
                    url: "/mahasiswa/delete-all",
                    type: "POST",
                    dataType: "json",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        table.ajax.reload(null, false);
                        alert(res.message);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        alert('Gagal hapus semua data.');
                    }
                });
            });

        });
    </script>
@endpush
