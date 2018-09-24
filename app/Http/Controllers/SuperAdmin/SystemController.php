<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\model\Users;
use App\model\Role;
use App\model\Module;
use App\model\Menu;
use App\model\Access;

class SystemController extends Controller
{
    public function index(){
        $page = 'superadmin.layouts.app';

        $user = Users::where('id', Auth::user()->id)->first();
        $role = Role::where('id', $user->role_id)->first();
        $accesses = Access::where('role_id', $role->id)->orderBy('module_id', 'ASC')->orderBy('menu_id', 'ASC')->get();


        //menu sudah ditampilkan sesuai dengan idnya, tapi modulnya belum. bagaimana caranya supaya module
        $modules = array();
        $lastModuleId = null;
        foreach ($accesses as $accessModule) {
            $menus = array();
            $module = Module::where('id', $accessModule->module_id)->first();
            foreach ($module->Menus as $menu) {
                foreach ($accesses as $accessMenu) {
                    if($menu->id == $accessMenu->menu_id){
                        $menu = Menu::where('id', $accessMenu->menu_id)->first();
                        $menus[] = $menu;
                    }
                }
            }

            $module->menus = $menus;

            if($lastModuleId != $accessModule->module_id) {
                //$module = Module::where('id', $accessModule->module_id)->first();
                $lastModuleId = $accessModule->module_id;
                $modules[] = $module;
            }
        }

        //     if($lastModuleId != $accessModule->module_id) {
        //         $modules[] = $module;
        //     }

        // }
        // dd($modules);
        return view($page)->with(compact('modules'));
    }

    //KONTEN
    //role
    // public function role(){
    // 	return view('superadmin.pages.role.index');
    // }
    // public function newRole(){
    // 	return view('superadmin.pages.role.newRole');
    // }
    // public function updateRole(){
    // 	return view('superadmin.pages.role.updateRole');
    // }
}
