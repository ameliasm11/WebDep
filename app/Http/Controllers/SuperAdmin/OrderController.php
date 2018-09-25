<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Order;
use App\model\Module;

class OrderController extends Controller
{
    public function order(){
      $page = 'SuperAdmin.Pages.order';
      $modules = Module::with('Menus')->get();
      $orders = Order::all();
      return view($page)->with(compact('modules','orders'));
    }
}
