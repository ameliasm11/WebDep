<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Partner_company;

class PartnerCompanyController extends SystemController
{
  public function PC()
  {
    $page = 'SuperAdmin.Pages.Master.partner_company';
    $modules = Module::with('Menus')->get();
    $types = Partner_company::all();
    return view($page)->with(compact('modules','types'));
  }

  public function newPC()
    {
        $page = 'SuperAdmin.Pages.Master.tambah_partner_company';
        $modules = Module::with('Menus')->get();
        return view($page)->with(compact('modules'));
  }

  public function createPC(Request $request)
      {
          $types = new Partner_company();
          $types->nama = $request->input('nama');
          $types->produk_category = $request->input('produk_category');
          $types->produk = $request->input('produk');
          $types->save();
          return redirect()->route('partner_company')->with('alert-success','Data berhasil ditambahkan!');
          $types->reset();
          return redirect()->route('partner_company.newPC');
      }

  public function editPC($id)
      {
          $page = 'SuperAdmin.Pages.Master.edit_partner_company';
          $modules = Module::with('Menus')->get();
          $types = Partner_company::findOrFail($id);
          return view($page)->with(compact('modules','types'));
      }

  public function updatePC(Request $request, $id)
      {
        $types = Partner_company::findOrFail($id);
        $types->nama = $request->nama;
        $types->produk_category = $request->produk_category;
        $types->produk = $request->produk;
        $isSuccess = $types->save();
        if ($isSuccess) {
          // return success
          return redirect()->route('partner_company')->with('alert-success','Data berhasil diubah!');
        }
        else {
          // returm failed
          return redirect()->route('partner_company')->with('alert-failed','Data tidak berhasil diubah!');
        }
        $types->reset();
        return redirect()->route('partner_company.editPC');
       }

    public function deletePC($id)
     {
         $types = Partner_company::findOrFail($id);
         $types->delete();
         return redirect()->route('partner_company')->with('alert-success','Data berhasil dihapus!');
     }
}
