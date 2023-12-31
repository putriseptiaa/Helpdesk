@extends('layouts.spta')

@section('nav')
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('mahasiswa.beranda') }}">Dashboard</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('mahasiswa.pengajuanulta') }}">Unggah Dokumen Laporan TA
        </a>
    </li>
@endsection

@section('content')
    <section class="slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                {{ __('Silahkan isi form dibawah ini untuk dapat mengunggah laporan TA sesuai dengan persyaratan yang dibutuhkan.') }}
                            </div>
                            <form method="POST" action="{{ route('pengajuanultastore') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="created_by" name="created_by"
                                    value="{{ Auth::id() }}">
                                {{-- @if ($message = Session::get('usernotfound'))
                                <div class="alert alert-danger alert-block">
                                    {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                                {{-- <strong>{{ $message }}</strong>
                                </div>
                            @endif --}}
                                <div class="form-group">
                                    <label for="email"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="" required autocomplete="email" autofocus>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="nim"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Nomor Induk Mahasiswa (NIM/NPM)') }}</label>

                                    <div class="col-md-12">
                                        <input id="nim" type="text" minlength="9" maxlength="9"
                                            class="form-control @error('nim') is-invalid @enderror" name="nim" required
                                            autocomplete="nim" placeholder="">
                                    </div>
                                    @error('nim')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="nama"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                                    <div class="col-md-12">
                                        <input id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama"
                                            value="" required autocomplete="nama">
                                    </div>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="jurusan"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Jurusan') }}</label>

                                    <div class="col-md-12">
                                        <select id="jurusan" type="text"
                                            class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                                            required autocomplete="jurusan" placeholder="">
                                            <option disabled selected value>Pilih Jurusan</option>
                                            <option value="sipil">Teknik Sipil</option>
                                            <option value="elektro">Teknik Elektro</option>
                                            <option value="informatika">Informatika</option>
                                            <option value="sistem_informasi">Sistem Informasi</option>
                                        </select>
                                    </div>
                                    @error('jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="tgl_pengumpulan"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Tanggal Pengumpulan') }}</label>

                                    <div class="col-md-12">
                                        <input id="tgl_pengumpulan" type="date"
                                            class="form-control @error('tgl_pengumpulan') is-invalid @enderror"
                                            name="tgl_pengumpulan" required autocomplete="tgl_pengumpulan" placeholder="">
                                    </div>
                                    @error('tgl_pengumpulan')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="judul_ta"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Judul Tugas Akhir') }}</label>

                                    <div class="col-md-12">
                                        <input id="judul_ta" type="text"
                                            class="form-control @error('judul_ta') is-invalid @enderror" name="judul_ta"
                                            required autocomplete="judul_ta" placeholder="">
                                    </div>
                                    @error('judul_ta')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="nm_pembimbing1"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Nama Pembimbing 1') }}</label>

                                    <div class="col-md-12">
                                        <input id="nm_pembimbing1" type="text"
                                            class="form-control @error('nm_pembimbing1') is-invalid @enderror"
                                            name="nm_pembimbing1" required autocomplete="nm_pembimbing1">
                                    </div>
                                    @error('nm_pembimbing1')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="nm_pembimbing2"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Nama Pembimbing 2') }}</label>

                                    <div class="col-md-12">
                                        <input id="nm_pembimbing2" type="text"
                                            class="form-control @error('nm_pembimbing2') is-invalid @enderror"
                                            name="nm_pembimbing2" required autocomplete="nm_pembimbing2">
                                    </div>
                                    @error('nm_pembimbing2')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="tgl_sidangta"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Tanggal Sidang TA') }}</label>

                                    <div class="col-md-12">
                                        <input id="tgl_sidangta" type="date"
                                            class="form-control @error('tgl_sidangta') is-invalid @enderror"
                                            name="tgl_sidangta" required autocomplete="tgl_sidangta">
                                    </div>
                                    @error('tgl_sidangta')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">

                                    <label for="file_laporanaplikasi"
                                        class="col-md-12 col-form-label text-md-end">{{ __('Upload File Laporan dan Aplikasi (nama-npm.zip)') }}</label>
                                    <div class="card-header">
                                        {{ __(' File laporan TA yang diupload wajib menyertakan lembar pengesahan yang telah lengkap ditandatangani, lembar pengesahannya dapat di scan atau di foto dengan rapi kemudian disatukan dengan file laporannya.
                                                                            File aplikasi atau apapun yang dihasilkan dari Tugas Akhir ini disertakan dan digabung dalam satu file ZIP.') }}
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="custom-file">
                                            <input id="file_laporanaplikasi" type="file"
                                                class="custom-file-input @error('file_laporanaplikasi') is-invalid @enderror"
                                                name="file_laporanaplikasi" required
                                                autocomplete="file_laporanaplikasi"accept=".zip">
                                            <label class="custom-file-label" for="customFile">Format File
                                                Nama-NPM.zip</label>
                                        </div>
                                    </div>
                                    @error('file_laporanaplikasi')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-core btn-block">
                                        {{ __('Submit') }}
                                    </button>

                                    @if (Route::has('welcome'))
                                        <a class="btn btn-link btn-block" href="{{ route('mahasiswa.beranda') }}">
                                            {{ __('Back') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer text-center">
            Copyright &copy; 2023 &mdash; Helpdesk Fakultas Teknik Universitas Siliwangi | All right reserved.
        </div>
    </section>
@endsection
