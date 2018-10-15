<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Method;
use App\model\Type;

class PaymentMethodController extends SystemController
{
  public function method()
  {
    $page = 'SuperAdmin.Pages.Master.payment_method';
    $modules = Module::with('Menus')->get();
    $types = Method::with('Type')->get();
    return view($page)->with(compact('modules','types'));
  }

  public function newMethod()
    {
        $page = 'SuperAdmin.Pages.Master.tambah_payment_method';
        $modules = Module::with('Menus')->get();
        $methods = Type::all();
        return view($page)->with(compact('modules', 'methods'));
  }

  public function createMethod(Request $request)
      {
          $types = new Method();
          $types->nama = $request->input('nama');
          $types->type_id = $request->input('type_id');
          $types->save();
          return redirect()->route('payment_method')->with('alert-success','Data berhasil ditambahkan!');
          $types->reset();
          return redirect()->route('payment_type.newMethod');
      }

  public function editMethod($id)
      {
          $page = 'SuperAdmin.Pages.Master.edit_payment_method';
          $modules = Module::with('Menus')->get();
          $types = Method::findOrFail($id);
          return view($page)->with(compact('modules','types'));
      }

  public function updateMethod(Request $request, $id)
      {
        $types = Method::findOrFail($id);
        $types->nama = $request->input('nama');
        $isSuccess = $types->save();
        if ($isSuccess) {
          // return success
          return redirect()->route('payment_method')->with('alert-success','Data berhasil diubah!');
        }
        else {
          // returm failed
          return redirect()->route('payment_method')->with('alert-failed','Data tidak berhasil diubah!');
        }
        $types->reset();
        return redirect()->route('payment_type.editMethod');
       }

    public function deleteMethod($id)
     {
         $types = Method::findOrFail($id);
         $types->delete();
         return redirect()->route('payment_method')->with('alert-success','Data berhasil dihapus!');
     }
}
