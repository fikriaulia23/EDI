    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">

                        @foreach ($model as $model)
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">JENJANG PENDIDIKAN TERAKHIR</label>
                                <div class="col-sm-10">
                                    <p>{{$model->pendidikan_terakhir}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">NAMA INSTRITUSI</label>
                                <div class="col-sm-10">
                                    <p>{{$model->nm_institusi}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">JURUSAN</label>
                                <div class="col-sm-10">
                                    <p>{{$model->jurusan}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">TAHUN LULUS</label>
                                <div class="col-sm-10">
                                    <p>{{$model->th_lulus}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">IPK</label>
                                <div class="col-sm-10">
                                    <p>{{$model->ipk}}</p>
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