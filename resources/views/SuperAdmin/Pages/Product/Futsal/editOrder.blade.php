<!-- @extends('superadmin.layouts.app') -->
@section('content')
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Order</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit Data</strong> Order
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.updateLapangan', $data->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">ID Jadwal</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jadwal_id" name="jadwal_id" class="form-control" value="{{ $data->jadwal_id }}" disabled></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" class="form-control" value="{{ $data->nama }}" disabled></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tanggal" name="tanggal" class="form-control" value="{{ $data->tanggal }}" disabled></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Jam Pesan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jam_pesan" name="jam_pesan" class="form-control" value="{{ $data->jam_pesan }}" disabled></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">No HP</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="no_hp" name="no_hp" class="form-control" value="{{ $data->no_hp }}" disabled></div>
                          </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        </form>
                        <a href="{{route('superadmin.futsal.lapangan')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                      </div>
                    </div>
@endsection
