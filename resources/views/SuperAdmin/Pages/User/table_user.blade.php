@extends('superadmin.layouts.app')
@section('content')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Management</h1>
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
                        <strong class="card-title">User List</strong>
                    </div>
                    <div class="card-body">
                    <div align="right">
                        <a href="{{route('superadmin.user.tambah')}}">
                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus" ></i>&nbsp; New</button>
                    </div><br>
                  		<table id="bootstrap-data-table" class="table table-striped table-bordered">
                    	<thead>
                      	<tr>
                        	<th>No</th>
                        	<th>Role</th>
                        	<th>Fullname</th>
                        	<th>Username</th>
                        	<th>Mail</th>
                        	<th>Phone</th>
                        	<th>Company</th>
                        	<th>Aksi</th>
                      	</tr>
                    	</thead>
                    	<tbody>
                      	<tr>
                        	<td>1</td>
                        	<td>00001</td>
                        	<td>Lufianti</td>
                        	<td>Lufi</td>
                        	<td>Lufianti08@gmail.com</td>
                        	<td>089654283916</td>
                        	<td>NET2 SOFTWARE</td>
                        	<td>
                            <center><a href=""><button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                            <a href=""><button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i></button></a></center>
                          </td>
                      	</tr>
                      	</tbody>
                      	</table>
                    </div>
                </div>
            </div>
@endsection