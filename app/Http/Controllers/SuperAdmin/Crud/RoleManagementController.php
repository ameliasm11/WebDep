<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Role;
use App\model\Access;
use App\model\Menu;
use Validator;

class RoleManagementController extends SystemController
{
    // public function __construct()
    // {
    //     $this->middleware('auth.superadmin');
    // }

    public function index()
    {
        $page = 'SuperAdmin.Pages.Role.index';
        $modules = Module::with('Menus')->get();
        $data = Role::all();
        // $accesses = Module::with('Access')->get();
        return view($page)->with(compact('modules','data'));
	  }

	public function create()
    {
        $page = 'SuperAdmin.Pages.Role.newRole';
        $modules = Module::with('Menus')->get();
        return view($page)->with(compact('modules'));
	}

  public function save(Request $request){
    // dd($request->request);
      //$page = 'SuperAdmin.Pages.Role.index';
      $this->validate($request, [
        'name'   => 'required',
        'level'   => 'required',
        'description' => 'required|max:255',
        // 'do_insert' => 'nullable',
        // 'do_update' => 'nullable',
        // 'do_insert' => 'nullable',
        // 'menus'   => 'required',
      ]);

        $post = new Role();
        $post->name = $request->get('name');
        $post->level = $request->get('level');
        $post->description = $request->get('description');
        $post->save();

        $menus = $request->get('menus');
        foreach ($menus as $index => $menu)
        {
          // dd($menu['id']);
          $m = Menu::where('id', $menu['id'])->first();
          $module = Module::where('id', $m->module_id)->first();

          $access = new Access();
          $access->role_id = $post->id;
          $access->module_id = $module->id;
          $access->menu_id = $menu['id'];
          $access->do_insert = $menu['access']['new'];
          $access->do_update = $menu['access']['update'];
          $access->do_delete = $menu['access']['delete'];
          $access->save();
        }

        //$post->Access()->save($access);
      return redirect()->route('superadmin.role.index')->with('alert','Berhasil Menambahkan data');
  }

  public function edit($id)
  {
    $page = 'SuperAdmin.Pages.Role.UpdateRole';      // $user = Users::find($id);
    $editRole = Role::findOrFail($id);
    $modules = Module::with('Menus')->get();
    return view($page)->with(compact('modules','editRole'));
  }
  public function UpdateRole(Request $request, $id)
  {
      $updateRole = Role::findOrFail($id);
      $updateRole->name = $request->name;
      $updateRole->level = $request->level;
      $updateRole->description = $request->description;
      $isSuccess = $updateRole->save();

      $menus = $request->get('menus');
      foreach ($menus as $index => $menu)
      {
        // dd($menu['id']);
        $m = Menu::where('id', $menu['id'])->first();
        $module = Module::where('id', $m->module_id)->first();

        $access = Access::findOrFail($id);
        $access->role_id = $updateRole->id;
        $access->module_id = $module->id;
        $access->menu_id = $menu['id'];
        $access->do_insert = $menu['access']['new'];
        $access->do_update = $menu['access']['update'];
        $access->do_delete = $menu['access']['delete'];
        $access->save();
      }

      if ($isSuccess) {
        // return success
        return redirect()->route('superadmin.role.index')->with('alert','Data berhasil diubah!');
      }
      else {
        // returm failed
        return redirect()->route('superadmin.role.edit')->with('alert','Data tidak berhasil diubah!');
      }
      $updateRole->reset();
      return redirect()->route('superadmin.role.edit');
   }

  public function destroy($id){
    $delete = Role::find($id)->delete();
    return !$delete
            ? redirect()->back()->with('warning', 'Gagal hapus data')->withInput($request->all())
            : redirect()->route('superadmin.role.index')->with('success', 'Berhasil hapus data');
    }
}
