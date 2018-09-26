<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Module;

class DashboardController extends Controller
{
  public function dashboard(){
    $page = 'superadmin.pages.dashboard';
    $modules = Module::with('Menus')->get();
    return view($page)->with(compact('modules'));
  }
}
