<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                @foreach ($inquiry as $inquiry)
                <table class="m-4">
                    <tr>
                        <td style="min-width: 150px;">
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
                        <td style="min-width: 150px;">
                            <p>Nama</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>No. KTP</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Tempat, Tanggal Lahir</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Jenis Kelamin</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Agama</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Golongan Darah</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Status</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Alamat KTP</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Alamat Tinggal</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Email</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>No. Telp</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Orang Dekat Yang Dapat Dihubungi</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width: 150px;">
                            <p>Skill</p>
                        </td>
                        <td style="min-width: 20px;">
                            <p> : </p>
                        </td>
                        <td style="min-width: 500px;">
                            <p>{{$inquiry->posisi_target}}</p>
                        </td>
                    </tr>
                </table>
                @endforeach

            </div>
        </div>
    </div>
</section>