<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">LIST PELAMAR</h1>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <?php
                            $no = 1; ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Posisi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($model as $model)
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td>{{$model->nama}}</td>
                                        <td>{{$model->t_tgl_lahir}}</td>
                                        <td>{{$model->posisi_target}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="/list-pelamar/detail/{{$model->id}}" class="btn btn-primary">View</a>
                                                <a href="/list-pelamar/delete/{{$model->id}}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <?php
                            $no++; ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
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