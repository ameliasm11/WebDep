<!-- @extends('superadmin.layouts.app') -->
@section('content')
<<<<<<< HEAD
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Form Partner Company</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah</strong> Data
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ route('partner_company.createPC') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-10 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Kategori</label></div>
                          <div class="col-12 col-md-9">
                            <select name="category_id" id="category_id" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                              <option value=""></option>
                              @foreach($categoris as $categori)
                              <option value="{{$categori->id}}">{{$categori->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Produk</label></div>
                          <div class="col-12 col-md-9">
                            <select name="produk_id" id="produk_id" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                              <option value=""></option>
                              @foreach($products as $product)
                              <option value="{{$product->id}}">{{$product->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
=======
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Partner Company</strong> Tambah Data
        </div>
    </div>
    <form action="{{ route('partner_company.createPC') }}" method="post">
    {{ csrf_field() }}
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
        <div class="col-10 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control">
        </div>
    </div>
    <div class="row form-group">
      <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Kategori</label></div>
      <div class="col-12 col-md-9">
        <select name="category_id" id="category_id" data-placeholder="Please select..." class="standardSelect" tabindex="1">
          <option value=""></option>
          @foreach($categoris as $categori)
          <option value="{{$categori->id}}">{{$categori->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="row form-group">
      <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Produk</label></div>
      <div class="col-12 col-md-9">
        <select name="produk_id" id="produk_id" class="form-control">
          <option value=""></option>
          @foreach($products as $product)
          <option value="{{$product->id}}">{{$product->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
>>>>>>> a46e52547eb2a0eb1d310b6f5f459f3a10a0137e

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
                      </div>
                    </div>
@endsection
