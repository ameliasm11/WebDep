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
                        <strong>Tambah Data</strong> Lapangan
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.createLapangan')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama Lapangan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama Lapangan" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Keterangan Tempat</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="ket" name="ket" placeholder="Keterangan Tempat" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Tempat</label></div>
                            <div class="col-12 col-md-9">
                              <select name="tempat_id" id="tempat_id" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                <option value=""></option>
                                @foreach($tempats as $tempat)
                                <option value="{{$tempat->id}}">{{$tempat->nama}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Gambar</label></div>
                            <div class="col-12 col-md-9"><input type="file" class="form-control" id="gambar" name="gambar">
                          </div>
                        </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('superadmin.futsal.lapangan')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
                    </div>
@endsection
