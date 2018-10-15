<!-- @extends('superadmin.layouts.app') -->
@section('content')
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Form Futsal</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit </strong> Tempat Futsal
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.updateTempat', $data->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" value="{{ $data->nama }}" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="alamat" name="alamat" value="{{ $data->alamat }}" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Gambar Lama</label></div>
                            <div class="col-12 col-md-9"><img src="{{ url('uploads/gambar/'.$data->gambar) }}" style="width: 75px; height: 75px;">
                          </div>
                          </div>

                          <div class="col col-md-3"><label for="text-input" class="form-control-label">Gambar</label></div>
                          <div class="row form-group">
                            <div class="col-12 col-md-9"><input type="file" class="form-control" id="gambar" name="gambar" value="{{ $data->gambar }}">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class="form-control-label">Jam Buka</label></div>
                          <div class="col-12 col-md-9"><input type="time" id="jam_buka" name="jam_buka" value="{{$data->jam_buka}}" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class="form-control-label">Jam Buka</label></div>
                          <div class="col-12 col-md-9"><input type="time" id="jam_tutup" name="jam_tutup" value="{{$data->jam_tutup}}" class="form-control"></div>
                        </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                            <div class="col-12 col-md-9"><textarea name="deskripsi" id="deskripsi" rows="3" value="{{$data->deskripsi}}" class="form-control"></textarea></div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        </form>
                        <a href="{{route('superadmin.futsal.tempat')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                      </div>
                    </div>
@endsection
