<!-- @extends('superadmin.layouts.app') -->
@section('content')
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Payment Type</strong> Tambah Data
        </div>
    </div>
    <form action="{{ route('payment_type.createType') }}" method="post">
    {{ csrf_field() }}
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
        <div class="col-10 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control">
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
@endsection
