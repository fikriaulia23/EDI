<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Pelamar</title>
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
        @endif

        @if (Auth::user()->role === 'admin')
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
                                                        <button type="button" class="btn btn-primary">View</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
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
            </div>
        </div>
        @include('layouts.footer')

        @else
        @include('layouts.error')
        @endif

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('layouts.jquery')
</body>

</html>