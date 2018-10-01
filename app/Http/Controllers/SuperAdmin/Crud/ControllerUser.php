<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;

use App\model\Module;
use App\model\Users;

class ControllerUser extends SystemController
{
    public function data()
    {
    	$page = 'SuperAdmin.Pages.User.table_user';
      $modules = Module::with('Menus')->get();
      $user = Users::all();
      return view($page)->with(compact('modules','user'));
    }

   public function edit($id)
   {
     // $user = Users::find($id);
     $user = Users::findOrFail($id);
     $modules = Module::with('Menus')->get();
     return view('SuperAdmin.Pages.User.edit_user', compact('modules', 'user'));
   }

   public function update(Request $request, $id)
   {
     // $user = Users::where('id','$id')->first();
     $user = Users::findOrFail($id);
     $user->name = $request->name;
     // $user->role_id = $request->role_id;
     $user->email = $request->email;
     $isSuccess = $user->save();
     if ($isSuccess) {
       // return success
       return redirect()->route('superadmin.user.data')->with('alert-success','Data berhasil diubah!');
     }
     else {
       // returm failed
       return redirect()->route('superadmin.user.data')->with('alert-failed','Data tidak berhasil diubah!');
     }
     $user->reset();
     return redirect()->route('superadmin.user.edit');
    }

    public function destroy($id)
    {
       $user = Users::findOrFail($id);
      // $user = Users::where('id', $id)->first();
      $user->delete();
      return redirect()->route('superadmin.user.data')->with('alert-success','Data berhasi dihapus!');
    }

    public function newUser()
      {
          $page = 'SuperAdmin.Pages.User.tambah_user';
          $modules = Module::with('Menus')->get();
          return view($page)->with(compact('modules'));
    }

    public function createUser(Request $request)
      {
          $user = new Users();
          $user->name = $request->input('name');
          $user->role_id = $request->input('role_id');
          $user->email = $request->input('email');
          $user->password = $request->input('password');
          $user->save();
          return redirect()->route('superadmin.user.data')->with('alert-success','Data berhasil ditambahkan!');
          $user->reset();
          return redirect()->route('superadmin.user.data');
        }
}
