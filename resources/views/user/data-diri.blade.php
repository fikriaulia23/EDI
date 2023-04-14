<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @if (Auth::user()->role === 'user')
        @include('user.sidebar')
        @else
        I don't have any records!
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-3 text-dark text-center">DATA PRIBADI PELAMAR</h1>
                </div>
                <section class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="card card-info">
                                    <form method="POST" action="/create-data-diri" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">POSISI YANG DILAMAR</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="posisi_target" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">NAMA</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nama" class="form-control" value="{{ Auth::user()->name }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">NO. KTP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="no_ktp" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">TEMPAT, TANGGAL LAHIR</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="t_tgl_lahir" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="j_kelamin">
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">AGAMA</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="agama">
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">GOLONGAN DARAH</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="goldar">
                                                        <option value="AB">AB</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="O">O</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">STATUS</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="status" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">ALAMAT KTP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="alamat_ktp" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">ALAMAT TINGGAL</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="alamat_tgl" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">EMAIL</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">NO. TELP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="no_tlp" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">ORANG TERDEKAT YANG DAPAT DIHUBUNGI</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="org_trdekat" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">SKILL</label>
                                                <div class="col-sm-10">
                                                    <textarea name="skill" cols="123%" rows="5" placeholder="Tulis keahlian & keterampilan yang saat ini anda miliki"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label>BERSEDIA DITEMPATKAN DISELURUH KANTOR PERUSAHAAN</label>
                                                <div class="ml-3 form-check">
                                                    <input class="form-check-input" type="radio" name="penempatan" value="YA" checked>
                                                    <label class="form-check-label">YA</label>
                                                </div>
                                                <div class="ml-3 form-check">
                                                    <input class="form-check-input" type="radio" name="penempatan" value="TIDAK">
                                                    <label class="form-check-label">TIDAK</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">PENGHASILAN YANG DIHARAPKAN</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="salary_target" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-info float-right">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @include('layouts.footer')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('layouts.jquery')
</body>

</html>