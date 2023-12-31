@extends('layous.administrator')

@section('nav')

    <li class="nav-item">
        <a class="nav-link" href="{{ route('administrator.beranda') }}">Dashboard</a>
    </li>

@endsection

@section('content')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light py-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../../assets/img/logounsil.png" width="30" height="30" class="d-inline-block align-top"
                    alt="HELPDESK FAKULTAS TEKNIK">
                HELPDESK FAKULTAS TEKNIK
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-uppercase">
                    <li class="nav-item ">
                        <a class="nav-link" href="beranda.html">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Layanan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="daftar_pengajuan.html">Pengajuan Surat (Mahasiswa)</a>
                            <a class="dropdown-item" href="daftar_pengaduan.html">Pengajuan Legalisasi(Mahasiswa)</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav text-uppercase">
                    <li class="nav-item active">
                        <a class="nav-link" href="notifikasi_verifikator.html"><i class="fas fa-bell"></i> <span
                                class="badge badge-pill badge-core">10+</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            akun
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item">Administrator</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../index.html">Logout</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <section class="card-feature">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <h5 class="card-header">Info Pengajuan surat</h5>
                        <div class="card-body">
                            Terdapat (5) pengajuan surat yang perlu diperiksa
                        </div>
                        <div class="card-footer py-4">
                            <a href="verifikasi_pengajuan.html" class="btn btn-core btn-block">Lanjut Periksa</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <h5 class="card-header">Info Pengajuan Legalisasi</h5>
                        <div class="card-body">
                            Terdapat (5) layanan legalisasi yang perlu diperiksa
                        </div>
                        <div class="card-footer py-4">
                            <a href="verifikasi_pengaduan.html" class="btn btn-core btn-block">Lanjut Periksa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
