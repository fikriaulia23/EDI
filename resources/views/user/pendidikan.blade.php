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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">PENDIDIKAN</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="card card-info">
                                    <form class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">POSISI LAMARAN</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" required name="id_biodata">
                                                        @foreach ($model as $model)
                                                        <option value="{{$model->id}}">{{$model->posisi_target}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">JENJANG PENDIDIKAN TERAKHIR</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="pendidikan_terakhir" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">NAMA INSTITUSI AKADEMIK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nm_institusi" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">JURUSAN</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="jurusan" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">TAHUN LULUS</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="th_lulus" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">IPK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="ipk" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-info float-right">Simpan</button>
                                        </div>
                                </div>
                                </form>
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