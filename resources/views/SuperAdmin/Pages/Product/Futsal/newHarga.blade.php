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
                        <strong>Add New</strong> Harga
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.SaveHarga')}}" method="POST" enctype="application/json" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jadwal</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jadwal_id" id="jadwal_id" class="form-control">
                                <option value="0" disabled selected>Please select</option>
                                @foreach($jadwal as $jadwals)
                                <option value="{{$jadwals->id}}">{{$jadwals->jam}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Harga</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="harga" name="harga" placeholder="Harga" class="form-control"></div>
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
