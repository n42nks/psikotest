@extends('frontend/dashboard')
@section('pendaftar', 'active')

@section('content')
    <div class="row">
        <!-- FORM -->
        <div class="col-md-4">
            <div class="box"
                style="border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.08); border-top:4px solid #F97316;">

                <div class="box-header text-center">
                    <h3 class="box-title" style="font-weight:bold; font-size:18px;">
                        <i class="fa fa-user-plus" style="color:#F97316;"></i><br>
                        Pendaftaran Peserta
                    </h3>
                </div>

                <div class="box-body">

                    <div class="callout" style="background:#f8fafc; border-left:4px solid #243A6B; border-radius:8px;">
                        <small><b>* Pastikan data yang diisi sudah benar</b></small>
                    </div>

                    <form method="POST" action="{{ url('tambahsiswa') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label><i class="fa fa-calendar"></i> Tanggal Daftar</label>
                            <input type="date" name="tgl_daftar" class="form-control" value="{{ date('Y-m-d') }}"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-user"></i> Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-religion"></i> Agama</label>
                            <select name="agama" class="form-control">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Konghucu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-map-marker"></i> Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" class="form-control">
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-calendar"></i> Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-home"></i> Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-venus-mars"></i> Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-phone"></i> Telp / WA</label>
                            <input type="text" name="telp" class="form-control" placeholder="08xxxx">
                        </div>

                        <button type="submit" class="btn btn-block"
                            style="background:linear-gradient(90deg,#F97316,#FB923C); color:white; font-weight:bold; border-radius:8px;">
                            <i class="fa fa-save"></i> Daftar Sekarang
                        </button>

                    </form>

                </div>
            </div>
        </div>
        <!-- INFO -->
        <div class="col-md-8">
            <div class="box"
                style="border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.08); border-top:4px solid #243A6B;">

                <div class="box-header">
                    <h3 class="box-title" style="font-weight:bold;">
                        <i class="fa fa-info-circle text-primary"></i> Informasi Seleksi
                    </h3>
                </div>

                <div class="box-body">

                    <!-- HERO INFO -->
                    <div
                        style="background:linear-gradient(90deg,#243A6B,#2F4A8A); color:white; padding:20px; border-radius:10px; margin-bottom:20px;">
                        <h4 style="margin-top:0;">Sistem CAT (Computer Assisted Test)</h4>
                        <p style="margin:0;">
                            Seleksi perangkat desa dilakukan secara transparan, objektif, dan hasil dapat langsung diketahui
                            setelah ujian.
                        </p>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="info-box" style="border-radius:10px;">
                                <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Persyaratan</span>
                                    <span class="info-box-number">Minimal SMA</span>
                                    <small>Usia 20 - 42 Tahun</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box" style="border-radius:10px;">
                                <span class="info-box-icon bg-blue"><i class="fa fa-list"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Tahapan</span>
                                    <span class="info-box-number">Seleksi</span>
                                    <small>Pendaftaran → CAT → Pengumuman</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box" style="border-radius:10px;">
                                <span class="info-box-icon bg-yellow"><i class="fa fa-calendar"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Jadwal</span>
                                    <span class="info-box-number">20 Juli 2025</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box" style="border-radius:10px;">
                                <span class="info-box-icon bg-red"><i class="fa fa-book"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                    <span class="info-box-number">TWK • TIU • TKP</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
