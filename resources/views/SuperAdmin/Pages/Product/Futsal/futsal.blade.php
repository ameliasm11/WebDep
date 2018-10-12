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
                            <strong class="card-title">List Jadwal</strong>
                        </div>
                    <div class="card-body">
                      <div class="row form-group">
                        <div class="col col-md-1"><label for="select" class=" form-control-label">Search</label></div>
                        <div class="col-12 col-md-3">
                          <select onchange="document.location.href=this.options[this.selectedIndex].value;" name="nama" id="nama" class="form-control">
                            <option value="0" disabled selected>Product</option>
                              @foreach($products as $product)
                            <option href="{{$product->url}}" value="">{{$product->nama}}</option>
                            @endforeach
                          </select>
                        </div>
                   <div class="col col-md-1"><label for="select" class=" form-control-label">Search</label></div>
                   <div class="col-12 col-md-3">
                     <select onchange="document.location.href=this.options[this.selectedIndex].value;" name="level" id="level" class="form-control">
                       <option value="0" disabled selected>Pilih</option>
                       <option value="{{route('superadmin.futsal.tempat')}}">Tempat</option>
                       <option value="{{route('superadmin.futsal.lapangan')}}">Lapangan</option>
                       <option value="{{route('superadmin.futsal.jadwal')}}">Jadwal</option>
                       <option value="{{route('superadmin.futsal.harga')}}">Harga</option>
                     </select>
                   </div>
                 </div>
                      </div>
                      <div class="card-body">
                        <div align="right">
                        <a href=""><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; New</button></a>
                    </div><br>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jam</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($data as $datas)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->Lapangan->nama}}</td>
                        <td>{{$datas->jam}}</td>
                        <td>{{$datas->tanggal}}</td>
                        <td><form action="{{route('superadmin.futsal.jadwalStatus', $datas->id)}}" method="post">
                            {{csrf_field()}}
                          @if ($datas->status == 0)
                            <button type="link" onClick="return confirm('Aktifkan Jadwal ?');" value="0" class="btn btn-outline-danger btn-sm">False</i></button>
                          @else
                            <button type="link" onClick="return confirm('Nonaktifkan Jadwal ?');" value="1" class="btn btn-outline-success btn-sm">True</i></button>
                          @endif
                        </form>
                        </td>
                        <td>{{$datas->created_at}}</td>
                        </form></td>
                        </td>
                        <td>
                          <center><a href="{{route ('superadmin.futsal.editjadwal', $datas->id)}}">
                            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                          </a>
                            <form method="POST" action="{{route('superadmin.futsal.deleteJadwal' , [$datas->id])}}" style="display: inline-block;">
  								            {{ csrf_field() }}
                                <button type="submit" onClick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                              </center>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
              </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        @endsection
