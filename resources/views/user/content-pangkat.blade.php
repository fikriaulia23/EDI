    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">

                        @foreach ($model as $model)
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">KODE PANGKAT</label>
                                <div class="col-sm-10">
                                    <p>{{$model->kd_pangkat}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">PANGKAT</label>
                                <div class="col-sm-10">
                                    <p>{{$model->nm_pangkat}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>