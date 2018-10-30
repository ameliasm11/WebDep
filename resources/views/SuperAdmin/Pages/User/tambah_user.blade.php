<!-- @extends('superadmin.layouts.app') -->
@section('content')
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Registrasi User Web</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah Data</strong> User
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.user.tambah')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Nama" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Level</label></div>
                            <div class="col-12 col-md-9">
                              <select name="level" id="level" data-placeholder="Silahkan Pilih..." class="standardSelect" tabindex="1">
                                <option value=""></option>
                                @foreach($levels as $level)
                                <option value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="email" name="email" placeholder="Email" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password" name="password" placeholder=Password class="form-control"></div>
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
                        <a href="{{route('superadmin.user.data')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Batal
                        </button></a>
                        </form>
                      </div>
                    </div>
@endsection
