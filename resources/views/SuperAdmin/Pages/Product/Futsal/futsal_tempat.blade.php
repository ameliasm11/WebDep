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

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Tempat</strong>
                        </div>
                        <div class="card-body">
                          <div class="row form-group">
                            <div class="col col-md-1"><label for="select" class=" form-control-label">Search</label></div>
                            <div class="col-12 col-md-3">
                              <select data-placeholder="Product" class="standardSelect" tabindex="1">
                                  <option value=""></option>
                                @foreach($products as $product)
                                  <option href="{{$product->url}}" value="" onchange="document.location.href=this.options[this.selectedIndex].value;">{{$product->nama}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="col col-md-1"><label for="select" class=" form-control-label">Search</label></div>
                             <div class="col-12 col-md-3">
                               <select data-placeholder="Tempat" class="standardSelect" tabindex="1" onchange="document.location.href=this.options[this.selectedIndex].value;">
                                 <option value=""></option>
                                 <option value="{{route('superadmin.futsal.tempat')}}">Tempat</option>
                                 <option value="{{route('superadmin.futsal.lapangan')}}">Lapangan</option>
                                 <option value="{{route('superadmin.futsal.jadwal')}}">Jadwal</option>
                               </select>
                             </div>
                           </div>
                          </div>
                          <div class="card-body">
                            <div align="right">
                            <a href="{{route('superadmin.futsal.newTempat')}}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; New</button></a>
                            </div><br>
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Gambar</th>
                                    <th>Jam Buka</th>
                                    <th>Jam Tutup</th>
                                    <th>Partner</th>
                                    <th>Deskripsi</th>
                                    <th>Dibuat Pada</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @php $no = 1; @endphp
                                  @foreach($data as $datas)
                                  <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$datas->nama}}</td>
                                    <td>{{$datas->alamat}}</td>
                                    <td><img src="{{ url('uploads/gambar/'.$datas->gambar) }}" style="width: 75px; height: 75px;"></td>
                                    <td>{{$datas->jam_buka}}</td>
                                    <td>{{$datas->jam_tutup}}</td>
                                    <td>{{$datas->Partnercompany->nama}}
                                    <td>{{$datas->deskripsi}}</td>
                                    <td>{{$datas->created_at}}</td>
                                    <td>
                                      <center><a href="{{route('superadmin.futsal.editTempat', [$datas->id])}}">
                                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                                      </a>
                                         <form method="POST" action="{{route('superadmin.futsal.deleteTempat', [$datas->id]) }}" style="display: inline-block;">
              								            {{ csrf_field() }}
                                            <button type="submit" onClick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                          </form>
                                          </center>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div><!-- .animated -->
            </div>
        @endsection
