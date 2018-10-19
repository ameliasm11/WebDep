<!-- @extends('superadmin.layouts.app') -->
@section('content')
<<<<<<< HEAD
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
                        <strong>Payment Type</strong> Edit Data
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ route('payment_type.updateType', $types->id) }}" method="post">
                          {{ csrf_field() }}
                          <div class="row form-group">
                              <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                              <div class="col-10 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" value="{{ $types->nama }}">
                              </div>
                          </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-success btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                            <a href="{{route('payment_type')}}">
                            <button type="button" class="btn btn-danger btn-sm">
                              <i class="fa fa-close"></i> Cancel
                            </button></a>
                        </div>
                        </form>
                      </div>
                    </div>
=======
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Payment Type</strong> Edit Data
        </div>
    </div>
    <form action="{{ route('payment_type.updateType', $types->id) }}" method="post">
      {{ csrf_field() }}
      <div class="row form-group">
          <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
          <div class="col-10 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" value="{{ $types->nama }}">
          </div>
      </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-success btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        <a href="{{route('payment_type')}}">
        <button type="button" class="btn btn-danger btn-sm">
          <i class="fa fa-close"></i> Cancel
        </button></a>
    </div>
  </form>
>>>>>>> a46e52547eb2a0eb1d310b6f5f459f3a10a0137e
@endsection
