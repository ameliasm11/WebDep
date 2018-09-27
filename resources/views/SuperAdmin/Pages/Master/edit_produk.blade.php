<!-- @extends('superadmin.layouts.app') -->
@section('content')
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Produk</strong> Edit Data
        </div>
    </div>
    <form action="{{ route('product.update', $products->id) }}" method="post">
      {{ csrf_field() }}
      <div class="row form-group">
          <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
          <div class="col-10 col-md-9"><input type="text" id="name" name="name" placeholder="Nama" class="form-control" value="{{ $products->name }}">
          </div>
      </div>
      <div class="row form-group">
          <div class="col col-md-2"><label for="text-input" class=" form-control-label">ID Produk Kategori</label></div>
          <div class="col-10 col-md-9"><input type="text" id="producat_id" name="producat_id" placeholder="ID Produk Kategori" class="form-control" value="{{ $products->producat_id }}">
          </div>
      </div>
      <div class="row form-group">
          <div class="col col-md-2"><label for="text-input" class=" form-control-label">URL</label></div>
          <div class="col-10 col-md-9"><input type="text" id="url" name="url" placeholder="URL" class="form-control" value="{{ $products->url }}">
          </div>
      </div>
      <div class="row form-group">
          <div class="col col-md-2"><label for="select" class=" form-control-label">Status</label></div>
          <div class="col-12 col-md-9">
              <select name="status" id="status" class="form-control" value="{{ $products->status }}">
                  <option value="0" disabled>Please select</option>
                      <option value="1">True</option>
                      <option value="2">False</option>
              </select>
          </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
          <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-success btn-sm">
          <i class="fa fa-ban"></i> Reset
        </button>
      <button type="submit" class="btn btn-danger btn-sm" href="{{ route('product')}}">
          <i class="fa fa-close"></i> Cancel
        </button>
      </div>
    </div>
    </form>
@endsection
