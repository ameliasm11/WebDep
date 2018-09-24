<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;

use App\model\Module;

class ControllerUser extends SystemController
{
      public function data()
    {
    	$page = 'SuperAdmin.Pages.User.table_user';
        $modules = Module::with('Menus')->get();
        return view($page)->with(compact('modules'));
    }

    public function tambah()
    {
    	$page = 'SuperAdmin.Pages.User.tambah_user';
        $modules = Module::with('Menus')->get();
        return view($page)->with(compact('modules'));
    }
}
