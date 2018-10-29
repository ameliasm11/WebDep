<!-- @extends('superadmin.layouts.app') -->
@section('content')
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Form Produk</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit</strong> Data
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ route('product.update', $products->id) }}" method="post">
                          {{ csrf_field() }}
                          <div class="row form-group">
                              <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                              <div class="col-10 col-md-9"><input type="text" id="name" name="name" placeholder="Nama" class="form-control" value="{{ $products->name }}">
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-2"><label for="text-input" class=" form-control-label">Kategori</label></div>
                              <div class="col-10 col-md-9"><input type="text" id="producat_id" name="producat_id" placeholder="ID Produk Kategori" class="form-control" value="{{ $products->KategoriProduk->name }}" disabled>
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-2"><label for="text-input" class=" form-control-label">URL</label></div>
                              <div class="col-10 col-md-9"><input type="text" id="url" name="url" placeholder="URL" class="form-control" value="{{ $products->url }}">
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
                      </div>
                    </div>
@endsection
