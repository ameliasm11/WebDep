<!-- @extends('superadmin.layouts.app') -->
@section('content')
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Form Lapangan Futsal</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add New</strong> Lapangan Futsal
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.createLapangan')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Keterangan Lapangan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="ket_lapangan" name="ket_lapangan" placeholder="Keterangan Tempat" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">ID tempat</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tempat_id" name="tempat_id" placeholder="ID Tempat" class="form-control"></div>
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
                        <button type="reset" class="btn btn-danger btn-sm"></a>
                          <i class="fa fa-close"></i> Cancel
                        </button>
                        </form>
                      </div>
                    </div>
@endsection