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
                        <strong>Add New</strong> Tempat Futsal
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.createTempat')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="nama" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="alamat" name="alamat" placeholder="alamat" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Gambar</label></div>
                            <div class="col-12 col-md-9"><input type="file" class="form-control" id="gambar" name="gambar">
                          </div>
                        </div>
                        <div class="col col-md-1"><label for="select" class=" form-control-label">Jam Buka</label></div>
                        <div class="col-12 col-md-3">
                          <select onchange="document.location.href=this.options[this.selectedIndex].value;" name="jam_buka" id="jam_buka" class="form-control">
                            <option value="0" disabled selected>Pilih</option>
                            <option value="1">01.00</option>
                            <option value="2">02.00</option>
                            <option value="3">03.00</option>
                            <option value="4">04.00</option>
                            <option value="5">05.00</option>
                            <option value="6">06.00</option>
                            <option value="7">07.00</option>
                            <option value="8">08.00</option>
                            <option value="9">09.00</option>
                            <option value="10">10.00</option>
                            <option value="11">11.00</option>
                            <option value="12">12.00</option>
                            <option value="13">13.00</option>
                            <option value="14">14.00</option>
                            <option value="15">15.00</option>
                            <option value="16">16.00</option>
                            <option value="17">17.00</option>
                            <option value="18">18.00</option>
                            <option value="19">19.00</option>
                            <option value="20">20.00</option>
                            <option value="21">21.00</option>
                            <option value="22">22.00</option>
                            <option value="23">23.00</option>
                            <option value="24">24.00</option>
                          </select>
                        </div>
                        <div class="col col-md-1"><label for="select" class=" form-control-label">Jam Tutup</label></div>
                        <div class="col-12 col-md-3">
                          <select onchange="document.location.href=this.options[this.selectedIndex].value;" name="jam_tutup" id="jam_tutup" class="form-control">
                            <option value="0" disabled selected>Pilih</option>
                            <option value="1">01.00</option>
                            <option value="2">02.00</option>
                            <option value="3">03.00</option>
                            <option value="4">04.00</option>
                            <option value="5">05.00</option>
                            <option value="6">06.00</option>
                            <option value="7">07.00</option>
                            <option value="8">08.00</option>
                            <option value="9">09.00</option>
                            <option value="10">10.00</option>
                            <option value="11">11.00</option>
                            <option value="12">12.00</option>
                            <option value="13">13.00</option>
                            <option value="14">14.00</option>
                            <option value="15">15.00</option>
                            <option value="16">16.00</option>
                            <option value="17">17.00</option>
                            <option value="18">18.00</option>
                            <option value="19">19.00</option>
                            <option value="20">20.00</option>
                            <option value="21">21.00</option>
                            <option value="22">22.00</option>
                            <option value="23">23.00</option>
                            <option value="24">24.00</option>
                          </select>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="select" class=" form-control-label">Partner</label></div>
                          <div class="col-12 col-md-9">
                            <select name="partner_id" id="partner_id" class="form-control">
                              <option value="0" disabled selected>Please select</option>
                              @foreach($partners as $partner)
                              <option value="{{$partner->id}}">{{$partner->nama}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="deskripsi" id="deskripsi" rows="3" placeholder="deskripsi" class="form-control"></textarea></div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('superadmin.futsal.tempat')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
                    </div>
@endsection
