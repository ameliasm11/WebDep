<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Role;
use App\model\Module;
use App\model\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $modules = Module::with('Menus')->get();
        return view('superadmin.layouts.app')->with(compact('modules'));
    }

    //KONTEN
    //role
    public function role(){
        return view('superadmin.pages.role.index');
    }
    public function newRole(){
        return view('superadmin.pages.role.newRole');
    }
    public function updateRole(){
        return view('superadmin.pages.role.updateRole');
    }
}
