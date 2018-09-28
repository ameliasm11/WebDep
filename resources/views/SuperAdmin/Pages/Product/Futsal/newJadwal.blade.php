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
                        <strong>Add New</strong> Jadwal
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.SaveJadwal')}}" method="POST" enctype="application/json" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Lapangan ID</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="lapangan_id" name="lapangan_id" placeholder="Lapangan ID" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tanggal" name="tanggal" placeholder="Harga" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Jam</label></div>
                            <div class="col-12 col-md-9"><input type="time" id="jam" name="jam" placeholder="Harga" class="form-control"></div>
                          </div>
                          <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Status</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="status" name="status" placeholder="Harga" class="form-control"></div>
                          </div> -->
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('superadmin.futsal.index')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
                    </div>
@endsection
