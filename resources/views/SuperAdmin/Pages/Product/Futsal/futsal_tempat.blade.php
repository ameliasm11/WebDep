<!-- @extends('superadmin.layouts.app') -->
@section('content')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Futsal</h1>
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
                            <strong class="card-title">Futsal Place</strong>
                        </div>
                    <div class="card-body">
                      <div class="row form-group">
                        <div class="col col-md-1"><label for="select" class=" form-control-label">Search</label></div>
                        <div class="col-12 col-md-3">
                          <select name="level" id="level" class="form-control">
                            <option value="0" disabled selected>Product</option>
                              @foreach($products as $product)
                            <option href="{{$product->url}}" value="" >{{$product->nama}}</option>
                            @endforeach
                          </select>
                   </div>
                   <div class="col col-md-1"><label for="select" class=" form-control-label">Search</label></div>
                   <div class="col-12 col-md-3">
                     <select onchange="document.location.href=this.options[this.selectedIndex].value;" name="level" id="level" class="form-control">
                       <option value="0" disabled selected>Data</option>
                       <option value="{{route('superadmin.futsal.order')}}">Order</a></option>
                       <option value="{{route('superadmin.futsal.tempat')}}">Place</option>
                       <option value="{{route('superadmin.futsal.lapangan')}}">Lapangan</option>
                       <option value="{{route('superadmin.futsal.index')}}">Jadwal</option>
                       <option value="{{route('superadmin.futsal.harga')}}">Harga</option>
                     </select>
                   </div>
                 </div>
                      </div>
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
                        <th>Deskripsi</th>
                        <th>Actions</th>
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
                        <td>{{$datas->deskripsi}}</td>
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
        </div><!-- .content -->
        @endsection