<!-- @extends('superadmin.layouts.app') -->
@section('content')
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Product</strong> Add Data
        </div>
    </div>
    <form action="{{ route('product.add') }}" method="post">
    {{ csrf_field() }}
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama Produk</label></div>
        <div class="col-10 col-md-9"><input type="text" id="name" name="name" placeholder="Nama" class="form-control">
        </div>
    </div>
    <div class="row form-group">
      <div class="col col-md-2"><label for="select" class=" form-control-label">Kategori</label></div>
      <div class="col-12 col-md-9">
        <select name="producat_id" id="producat_id" class="form-control">
          <option value="0" disabled selected>Please select</option>
          @foreach($products as $product)
          <option value="{{$product->id}}">{{$product->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">URL</label></div>
        <div class="col-10 col-md-9"><input type="text" id="url" name="url" placeholder="URL" class="form-control">
        </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
      </button>
      <button type="reset" class="btn btn-success btn-sm">
        <i class="fa fa-ban"></i> Reset
      </button>
      <a href="{{route('product')}}">
      <button type="button" class="btn btn-danger btn-sm">
        <i class="fa fa-close"></i> Cancel
      </button></a>
    </div>
  </div>
</form>
@endsection
