<!-- @extends('superadmin.layouts.app') -->
@section('content')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Product Category</h1>
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
                            <strong class="card-title">Product Category List</strong>
                        </div>
                    <div class="card-body">
                    <div align="right">
                        <a href="{{route('superadmin.role.tambahdata')}}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; New</button></a>
                    </div><br>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Role Name</th>
                        <th>Level</th>
                        <th>Description</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $datas)
                      <tr>
                        <td>{{$datas->id}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->level}}</td>
                        <td>{{$datas->description}}</td>
                        <td>
                          <center><a href="">
                            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                          </a>
                            <!-- <form method="POST" action="{{ route('superadmin.role.delete', [$datas->id]) }}" style="display: inline-block;">
  								            {{ csrf_field() }}
                              {{ method_field('DELETE') }} -->
                              <a href="{{route('superadmin.role.delete', [$datas->id])}}">
                                <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                              </a></center>
                            <!-- </form> -->
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
