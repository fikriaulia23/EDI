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

        @if (Auth::user()->role === 'admin')
        @include('admin.sidebar')
        @elseif (Auth::user()->role === 'user')
        @include('user.sidebar')
        @else
        I don't have any records!
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            @if (Auth::user()->role === 'admin' && request()->is('home'))
                            <h1 class="m-0 text-dark">Dashboard</h1>
                            @endif
                            @if (Auth::user()->role === 'admin' && request()->is('list-pelamar*'))
                            <h1 class="m-0 text-dark">Daftar Pelamar</h1>
                            @endif
                            @if (Auth::user()->role === 'user' && request()->is('home'))
                            <h1 class="m-0 text-dark">List Lamaran</h1>
                            @endif
                            @if (Auth::user()->role === 'user' && request()->is('data-diri'))
                            <h1 class="m-0 text-dark">Data Diri</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    @if (Auth::user()->role === 'admin' && request()->is('home'))
                    @include('admin.content-dashboard')
                    @elseif (Auth::user()->role === 'admin' && request()->is('list-pelamar'))
                    @include('admin.content-list-pelamar')
                    @elseif (Auth::user()->role === 'user' && request()->is('home*'))
                    @include('user.content-dashboard')
                    @elseif (Auth::user()->role === 'user' && request()->is('data-diri'))
                    @include('user.content-data-diri')
                    @else
                    @include('layouts.error')
                    @endif
            </section>

            <?php if ($inquiry) { ?>
                <div class="card m-3">
                    @foreach ($inquiry as $inquiry)
                    <table class="m-4">
                        <tr>
                            <td>
                                <p>Posisi</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->posisi_target}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Nama</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->nama}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>No. KTP</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->no_ktp}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tempat, Tanggal Lahir</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->t_tgl_lahir}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Jenis Kelamin</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->j_kelamin}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Agama</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->agama}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Golongan Darah</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->goldar}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Status</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->status}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Alamat KTP</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->alamat_ktp}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Alamat Tinggal</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->alamat_tgl}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->email}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>No. Telp</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->no_tlp}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Orang Dekat Yang Dapat Dihubungi</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->org_trdekat}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Skill</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->skill}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Bersedia Ditempatkan Diseluruh Kantor Perusahaan</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->penempatan}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Penghasilan Yang Diharapkan</p>
                            </td>
                            <td style="min-width: 20px;">
                                <p> : </p>
                            </td>
                            <td style="min-width: 500px;">
                                <p>{{$inquiry->salary_target}}</p>
                            </td>
                        </tr>
                    </table>
                    @endforeach

                    <div class="row m-3">
                        <div class="col-lg-3">
                            <label>RIwayat Pendidikan</label>
                            <table>
                                <tr>
                                    <th>Jenjang Pendidikan</th>
                                    <th>Nama Instritusi</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Lulus</th>
                                    <th>IPK</th>
                                </tr>
                                @foreach ($inquiryPendidikan as $inquiry)
                                <tr>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->pendidikan_terakhir}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->nm_institusi}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->jurusan}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->th_lulus}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->ipk}}</p>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-lg-3">
                            <label>RIwayat Pelatihan</label>
                            <table>
                                <tr>
                                    <th>Seminar</th>
                                    <th>Sertifikat</th>
                                    <th>Tahun</th>
                                </tr>
                                @foreach ($inquiryPelatihan as $inquiry)
                                <tr>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->nm_kursus}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->sertifikat}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->tahun}}</p>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-lg-3">
                            <label>RIwayat Pekerjaan</label>
                            <table>
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi</th>
                                    <th>Pendapatan</th>
                                    <th>Tahun</th>
                                </tr>
                                @foreach ($inquiryPekerjaan as $inquiry)
                                <tr>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->nm_perusahaan}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->posisi}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->salary}}</p>
                                    </td>
                                    <td style="min-width: 150px;">
                                        <p>{{$inquiry->tahun}}</p>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>


                </div>
            <?php } ?>


        </div>
        @include('layouts.footer')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('layouts.jquery')
</body>

</html>