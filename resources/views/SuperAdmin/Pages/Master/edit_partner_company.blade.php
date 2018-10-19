<!-- @extends('superadmin.layouts.app') -->
@section('content')
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Partner Company</strong> Edit Data
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
          <div class="col-10 col-md-9"><input type="text" id="category_id" name="category_id" class="form-control" value="{{ $types->KategoriProduk->name }}" disabled>
          </div>
      </div>
      <div class="row form-group">
          <div class="col col-md-2"><label for="text-input" class=" form-control-label">Produk</label></div>
          <div class="col-10 col-md-9"><input type="text" id="produk_id" name="produk_id" class="form-control" value="{{ $types->produk->name }}" disabled>
          </div>
      </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-success btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        <a href="{{route('partner_company')}}">
        <button type="button" class="btn btn-danger btn-sm">
          <i class="fa fa-close"></i> Cancel
        </button></a>
    </div>
  </form>
@endsection
