<!-- @extends('superadmin.layouts.app') -->
@section('content')
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
                        <strong>Tambah Data</strong> Metode Pembayaran
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ route('payment_method.updateMethod', $types->id) }}" method="post">
                          {{ csrf_field() }}
                          <div class="row form-group">
                              <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                              <div class="col-10 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" value="{{ $types->nama }}">
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-2"><label for="text-input" class=" form-control-label">Payment Type</label></div>
                              <div class="col-10 col-md-9"><input type="text" id="type_id" name="type_id" placeholder="Nama" class="form-control" value="{{ $types->type->nama }}" disabled>
                              </div>
                          </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-success btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                            <button class="btn btn-danger btn-sm" type="submit" href="{{route('payment_method')}}">
                                <i class="fa fa-close"></i>cancel
                            </button>
                        </div>
                        </form>
                      </div>
                    </div>
@endsection
