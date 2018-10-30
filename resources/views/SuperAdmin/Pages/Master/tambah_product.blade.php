<!-- @extends('superadmin.layouts.app') -->
@section('content')

                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Produk</h1>
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
                            <select name="producat_id" id="producat_id" data-placeholder="Silahkan Pilih..." class="standardSelect" tabindex="1">
                              <option value=""></option>
                              @foreach($kategoris as $kategori)
                              <option value="{{$kategori->id}}">{{$kategori->name}}</option>
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
                            <i class="fa fa-close"></i> Kembali
                          </button></a>
                        </div>
                        </div>
                        </form>
                      </div>
                    </div>

@endsection
