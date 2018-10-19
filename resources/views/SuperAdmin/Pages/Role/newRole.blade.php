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
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah Data</strong> Role
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('superadmin.role.save')}}" method="POST" enctype="application/json" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Role Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Role name" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Level</label></div>
                            <div class="col-12 col-md-9">
                              <select name="level" id="level" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                <option value=""</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="description" id="description" rows="3" placeholder="Description" class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Role Access</label></div>

                            <div class="col-lg-9">
                                <div class="card">
                                  <div class="card-header">
                                    <strong>Main Menu</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <div class="col col-md-12">
                                      <div class="form-check" id="checkBoxAll">
                                      @foreach($modules as $module)
                                        <div>
                                          <label>
                                            <strong>{{$module->name}}</strong>
                                          </label>
                                        </div>
                                        @foreach($module->Menus as $index => $menu)
                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="menu" name="menus[{{$index}}][id]" value="{{$menu->id}}" class="form-check-input">{{$menu->name}}
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="new" name="menus[{{$index}}][access][new]" value="1" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="update" name="menus[{{$index}}][access][update]" value="1" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="delete" name="menus[{{$index}}][access][delete]" value="1" class="form-check-input">Delete
                                          </label>
                                        </div>
                                        @endforeach
                                        @endforeach
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('superadmin.role.index')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
                    </div>
@endsection
