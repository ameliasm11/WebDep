<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Partnercompany;
use App\model\KategoriProduk;
use App\model\Produk;

class PartnerCompanyController extends SystemController
{
  public function PC()
  {
    $page = 'SuperAdmin.Pages.Master.partner_company';
    $modules = Module::with('Menus')->get();
    $types = Partnercompany::with('KategoriProduk', 'Produk')->get();
    return view($page)->with(compact('modules','types'));
  }

  public function newPC()
    {
        $page = 'SuperAdmin.Pages.Master.tambah_partner_company';
        $modules = Module::with('Menus')->get();
        $categoris = KategoriProduk::all();
        $products = Produk::all();
        return view($page)->with(compact('modules', 'categoris', 'products'));
  }

  public function createPC(Request $request)
      {
          $types = new Partnercompany();
          $types->nama = $request->input('nama');
          $types->category_id = $request->input('category_id');
          $types->produk_id = $request->input('produk_id');
          $types->save();
          return redirect()->route('partner_company')->with('alert-success','Data berhasil ditambahkan!');
          $types->reset();
          return redirect()->route('partner_company.newPC');
      }

  public function editPC($id)
      {
          $page = 'SuperAdmin.Pages.Master.edit_partner_company';
          $modules = Module::with('Menus')->get();
          $types = Partnercompany::findOrFail($id);
          return view($page)->with(compact('modules','types'));
      }

  public function updatePC(Request $request, $id)
      {
        $types = Partnercompany::findOrFail($id);
        $types->nama = $request->nama;
        $types->category_id = $request->input('category_id');
        $types->produk_id = $request->input('produk_id');
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
         $types = Partnercompany::findOrFail($id);
         $types->delete();
         return redirect()->route('partner_company')->with('alert-success','Data berhasil dihapus!');
     }
}
