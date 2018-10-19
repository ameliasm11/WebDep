<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Order;
use App\model\Module;
use App\model\Produk;
use App\model\Menu;

class OrderController extends SystemController
{
  public function order()
  {
      $page = 'SuperAdmin.Pages.Product.Futsal.order';
      $modules = Module::with('Menus')->get();
      $products = Produk::all();
      $data = Order::all();
      return view($page)->with(compact('modules','data','products'));
  }

  public function deleteOrder($id)
  {
       $data = Order::findOrFail($id);
       $data->delete();
       return redirect()->route('order')->with('alert-success','Data berhasil dihapus!');
   }

   public function editOrder($id)
       {
           $page = 'SuperAdmin.Pages.Product.Futsal.editOrder';
           $modules = Module::with('Menus')->get();
           $data = Order::findOrFail($id);
           return view($page)->with(compact('modules','data'));
       }

   public function UpdateOrder(Request $request, $id)
       {
         $data = Order::findOrFail($id);
         $data->status = $request->status;
         $isSuccess = $data->save();
         if ($isSuccess) {
           // return success
           return redirect()->route('order')->with('alert-success','Data berhasil diubah!');
         }
         else {
           // returm failed
           return redirect()->route('order')->with('alert-failed','Data tidak berhasil diubah!');
         }
         $data->reset();
         return redirect()->route('order.UpdateOrder');
        }

        public function OrderStatus(Request $request, $id){
          $orderStatus = Order::findOrFail($id);
          if($orderStatus->status == 0 || null){
            $orderStatus->status = $request->status = 1;
            $orderStatus->save();
           // dd($jadwalStatus);
           return redirect()->route('order');
          }
          else {
            $orderStatus->status = $request->status = 0;
            $orderStatus->save();
            return redirect()->route('order');
          }
        }
}
