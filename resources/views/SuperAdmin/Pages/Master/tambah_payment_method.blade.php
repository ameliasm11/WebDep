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
                        <strong>Add New</strong> Payment Method
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ route('payment_method.createMethod') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row form-group">
                          <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Type</label></div>
                          <div class="col-12 col-md-9">
                            <select name="type_id" id="type_id" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                              <option value=""></option>
                              @foreach($methods as $method)
                              <option value="{{$method->id}}">{{$method->nama}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
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
                            <a href="{{route('payment_method')}}">
                            <button type="button" class="btn btn-danger btn-sm">
                              <i class="fa fa-close"></i> Cancel
                            </button></a>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
@endsection
