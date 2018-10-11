<!-- @extends('superadmin.layouts.app') -->
@section('content')
<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Partner Company</h1></div>
      </div>
    </div>
  </div>
  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <strong class="card-title">List Partner Company</strong></div>
                <div class="card-body">
                  <div align="right">
                    <a href="{{route('partner_company.newPC')}}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; New</button></a>
                  </div><br>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Produk</th>
                        <th>Created at</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($types as $type)
                        <td>{{$no++}}</td>
                        <td>{{$type->nama}}</td>
                        <td>{{$type->kategori->name}}</td>
                        <td>{{$type->produk->name}}</td>
                        <td>{{$type->created_at}}</td>
                        <td>
                          <center><a href="{{ route('partner_company.editPC', [$type] )}}"><button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                          <form action="{{ route('partner_company.deletePC', $type->id) }}" method="post" style="display: inline-block">
                               {{ csrf_field() }}
                          <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
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
            </div><!-- .animated -->
        </div><!-- .content -->
        @endsection
