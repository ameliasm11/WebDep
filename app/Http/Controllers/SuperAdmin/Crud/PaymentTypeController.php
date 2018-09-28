<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Payment_type;

class PaymentTypeController extends SystemController
{
  public function type()
  {
    $page = 'SuperAdmin.Pages.Master.payment_type';
    $modules = Module::with('Menus')->get();
    $types = Payment_type::all();
    return view($page)->with(compact('modules','types'));
  }

  public function newType()
    {
        $page = 'SuperAdmin.Pages.Master.tambah_payment_type';
        $modules = Module::with('Menus')->get();
        return view($page)->with(compact('modules'));
  }

  public function createType(Request $request)
      {
          $types = new Payment_type();
          $types->nama = $request->input('nama');
          $types->save();
          return redirect()->route('payment_type')->with('alert-success','Data berhasil ditambahkan!');
          $types->reset();
          return redirect()->route('payment_type.newType');
      }

  public function editType($id)
      {
          $page = 'SuperAdmin.Pages.Master.edit_payment_type';
          $modules = Module::with('Menus')->get();
          $types = Payment_type::findOrFail($id);
          return view($page)->with(compact('modules','types'));
      }

  public function updateType(Request $request, $id)
      {
        $types = Payment_type::findOrFail($id);
        $types->nama = $request->nama;
        $isSuccess = $types->save();
        if ($isSuccess) {
          // return success
          return redirect()->route('payment_type')->with('alert-success','Data berhasil diubah!');
        }
        else {
          // returm failed
          return redirect()->route('payment_type')->with('alert-failed','Data tidak berhasil diubah!');
        }
        $types->reset();
        return redirect()->route('payment_type.editType');
       }

    public function deleteType($id)
     {
         $types = Payment_type::findOrFail($id);
         $types->delete();
         return redirect()->route('payment_type')->with('alert-success','Data berhasil dihapus!');
     }

}
