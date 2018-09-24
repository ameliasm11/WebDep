@extends('superadmin.layouts.app')
@section('content')
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>User Management</strong> Add Data
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="select" class=" form-control-label">Role</label></div>
        <div class="col-12 col-md-9">
            <select name="select" id="select" class="form-control">
                <option value="0">Please select</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Username</label></div>
        <div class="col-10 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Username" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Fullname</label></div>
        <div class="col-10 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Fullname" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Mail</label></div>
        <div class="col-10 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Mail" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Phone</label></div>
        <div class="col-10 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Phone" class="form-control">
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Company</label></div>
        <div class="col-10 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Company" class="form-control">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-success btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        <button class="btn btn-danger btn-sm" type="submit">
            <i class="fa fa-close"></i>cancel
        </button>
    </div>
@endsection



