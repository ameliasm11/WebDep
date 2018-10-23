<!-- @extends('superadmin.layouts.app') -->
@section('content')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Role Management</h1>
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
                            <strong class="card-title">Daftar Role</strong>
                        </div>
                    <div class="card-body">
                    <div align="right">
                        <a href="{{route('superadmin.role.tambahdata')}}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; New</button></a>
                    </div><br>
                  <table id="dataTable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Role</th>
                        <th>Level</th>
                        <th>Deskripsi</th>
                        <th>Dibuat Pada</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $datas)
                      <tr>
                        <td>{{$datas->id}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->level}}</td>
                        <td>{{$datas->description}}</td>
                        <td>{{$datas->created_at}}</td>
                        <td>
                          <center><a href="{{route ('superadmin.role.edit', $datas->id)}}">
                            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                          </a>
                            <form action="{{route ('superadmin.role.delete', $datas->id) }}" method="POST" style="display: inline-block">
  								            {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <!-- <a href="{{route('superadmin.role.delete', [$datas->id])}}"> -->
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button>
                              <!-- </a> -->
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
