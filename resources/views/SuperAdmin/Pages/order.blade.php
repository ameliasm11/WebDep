<!-- @extends('superadmin.layouts.app') -->
@section('content')
<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Order</h1></div>
      </div>
    </div>
  </div>
  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <strong class="card-title">List Order</strong></div>
                <div class="card-body">
                  <div align="right">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>jadwal</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>status</th>
                        <th>No HP</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($orders as $order)
                        <td>{{$order->id}}</td>
                        <td>{{$order->jadwal_id}}</td>
                        <td>{{$order->nama}}</td>
                        <td>{{$order->tanggal}}</td>
                        <td>{{$order->jam_pesan}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->no_hp}}</td>
                          <form action="{{ route('superadmin.user.delete', $order->id) }}" method="post" style="display: inline-block">
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
