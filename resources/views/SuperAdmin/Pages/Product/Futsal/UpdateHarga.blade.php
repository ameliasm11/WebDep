<!-- @extends('superadmin.layouts.app') -->
@section('content')
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Form Jadwal</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add New</strong> Jadwal
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.updateHarga', $editHarga->id)}}" method="POST" enctype="application/json" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Jadwal ID</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jadwal_id" name="jadwal_id" placeholder="Jadwal ID" class="form-control" value="{{$editHarga->jadwal_id}}"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Harga</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="harga" name="harga" placeholder="Harga" class="form-control" value="{{$editHarga->harga}}"></div>
                          </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('superadmin.futsal.harga')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
                    </div>
@endsection
