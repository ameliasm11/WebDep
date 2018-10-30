<!-- @extends('superadmin.layouts.app') -->
@section('content')
<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Produk</h1></div>
      </div>
    </div>
  </div>
  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <strong class="card-title">Daftar Produk</strong></div>
              <div class="card-body">
              <div align="right">
                  <a href="{{route('product.add')}}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah</button></a>
              </div><br>
                <div class="card-body">
                  <div align="right">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th>Dibuat Pada</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($products as $product)
                        <td>{{$no++}}</td>
                        <td>
                          <center><a href="{{ route('product.edit', [$product] )}}"><button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                          <form action="{{ route('product.delete', $product->id) }}" method="post" style="display: inline-block">
                               {{ csrf_field() }}
                          <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                          </form>
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->kategoriproduk->name}}</td>
                        <td>{{$product->url}}</td>
                        <td><form action="{{route('product.status', $product->id)}}" method="post">
                          {{csrf_field()}}
                          @if ($product->status == 0)
                            <button type="link" onClick="return confirm('Aktifkan Produk ?');" value="0" class="btn btn-outline-danger btn-sm">False</i></button>
                          @else
                            <button type="link" onClick="return confirm('Nonaktifkan Produk ?');" value="1" class="btn btn-outline-success btn-sm">True</i></button>
                          @endif
                        </form>
                        </td>
                        <td>{{$product->created_at}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        @endsection
