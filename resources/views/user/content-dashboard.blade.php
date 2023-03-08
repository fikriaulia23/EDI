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
                                            <a href="/home/detail/{{$model->id}}" class="btn btn-primary">View</a>
                                            <button type="button" class="btn btn-warning">Edit</button>
                                            <a href="/home/delete/{{$model->id}}" class="btn btn-danger">Delete</a>
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