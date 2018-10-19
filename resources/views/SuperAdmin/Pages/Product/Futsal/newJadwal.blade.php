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
                        <strong>Tambah Data</strong> Jadwal
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.futsal.SaveJadwal')}}" method="POST" enctype="application/json" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Tempat</label></div>
                            <div class="col-12 col-md-9">
                              <select name="tempat_id" id="tempat_id" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                <option value=""></option>
                                @foreach($tempats as $tempat)
                                <option value="{{$tempat->id}}">{{$tempat->nama}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Lapangan</label></div>
                            <div class="col-12 col-md-9">
                              <select name="lapangan_id" id="lapangan_id" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                <option value="" disabled selected></option>
                                @foreach($lapangan as $lapangans)
                                <option value="{{$lapangans->id}}">{{$lapangans->nama}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tanggal" name="tanggal" placeholder="Harga" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jam</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jam" id="jam" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                <option value=""</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Harga</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="harga" name="harga" placeholder="Harga" class="form-control"></div>
                          </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('superadmin.futsal.jadwal')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
                    </div>
@endsection
