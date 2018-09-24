<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Role;
use App\model\Jadwal;
use App\model\Lapangan;
use App\model\Harga;
use App\model\Tempat;

class FutsalController extends SystemController
{
  public function index()
  {
      $page = 'SuperAdmin.Pages.Product.Futsal.futsal';
      $modules = Module::with('Menus')->get();
      $data = Jadwal::all();
      // $accesses = Module::with('Access')->get();
      return view($page)->with(compact('modules','data'));

  }
}
