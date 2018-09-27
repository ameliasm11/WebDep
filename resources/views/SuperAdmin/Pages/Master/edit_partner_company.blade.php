<!-- @extends('superadmin.layouts.app') -->
@section('content')
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Payment Method</strong> Edit Data
        </div>
    </div>
    <form action="{{ route('partner_company.updatePC', $types->id) }}" method="post">
      {{ csrf_field() }}
      <div class="row form-group">
          <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
          <div class="col-10 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" value="{{ $types->nama }}">
          </div>
      </div>
      <div class="row form-group">
          <div class="col col-md-2"><label for="text-input" class=" form-control-label">Kategori Produk</label></div>
          <div class="col-10 col-md-9"><input type="text" id="produk_category" name="produk_category" class="form-control" value="{{ $types->produk_category }}">
          </div>
      </div>
      <div class="row form-group">
          <div class="col col-md-2"><label for="text-input" class=" form-control-label">Produk</label></div>
          <div class="col-10 col-md-9"><input type="text" id="produk" name="produk" class="form-control" value="{{ $types->produk }}">
          </div>
      </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-success btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        <button class="btn btn-danger btn-sm" type="submit" href="{{route('partner_company')}}">
            <i class="fa fa-close"></i>cancel
        </button>
    </div>
  </form>
@endsection
