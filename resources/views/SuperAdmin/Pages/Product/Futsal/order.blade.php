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
              <strong class="card-title">Daftar Order</strong></div>
                <div class="card-body">
                  <div align="right">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>No HP</th>
                        <th>Status</th>
                        <th>Dibuat Pada</th>

                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($data as $datas)
                        <td>{{$no++}}</td>
                        <td>{{$datas->nama}}</td>
                        <td>{{$datas->tanggal}}</td>
                        <td>{{$datas->jam_pesan}}</td>
                        <td>{{$datas->no_hp}}</td>
                        <td><form action="{{route('order.StatusOrder', $datas->id)}}" method="post">
                          {{csrf_field()}}
                          @if ($datas->status == 0)
                            <button type="link" onClick="return confirm('Aktifkan Order ?');" value="0" class="btn btn-outline-danger btn-sm">Unpaid</i></button>
                          @else
                            <button type="link" onClick="return confirm('Nonaktifkan Order ?');" value="1" class="btn btn-outline-success btn-sm">Paid</i></button>
                          @endif
                        </form>
                        </td>
                        <td>{{$datas->created_at}}</td>
                        <!-- <td><center><a href="{{route('order.editOrder', [$datas->id])}}">
                          <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                        </a> -->

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
