<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Produk;

class ProductController extends SystemController
{
  public function product(){
    $page = 'SuperAdmin.Pages.Master.product';
    $modules = Module::with('Menus')->get();
    $products = Produk::all();
    return view($page)->with(compact('modules','products'));
  }

  public function tambah()
  {
  	$page = 'SuperAdmin.Pages.Master.tambah_product';
    $modules = Module::with('Menus')->get();
    $products = Produk::all();
    return view($page)->with(compact('modules', 'products'));
  }

  public function store(Request $request)
   {
       $products = new Produk();
       $products->name = $request->name;
       $products->producat_id = $request->producat_id;
       $products->url = $request->url;
       $products->status = $request->status;
       $products->save();
       return redirect()->route('product')->with('alert-success','Berhasil Menambahkan Data!');
   }

   public function edit($id)
   {
     $products = Produk::findOrFail($id);
     $modules = Module::with('Menus')->get();
     return view('SuperAdmin.Pages.Master.edit_produk', compact('modules', 'products'));
   }

   public function update(Request $request, $id)
   {
     $products = Produk::findOrFail($id);
     $products->name = $request->name;
     $products->producat_id = $request->producat_id;
     $products->url = $request->url;
     $products->status = $request->status;
     $isSuccess = $products->save();
     if ($isSuccess) {
       // return success
       return redirect()->route('product')->with('alert-success','Data berhasil diubah!');
     }
     else {
       // returm failed
       return redirect()->route('product')->with('alert-failed','Data tidak berhasil diubah!');
     }
     $products->reset();
     return redirect()->route('product');
    }

    public function destroy($id)
    {
      $products = Produk::findOrFail($id);
      $products->delete();
      return redirect()->route('product')->with('alert-success','Data berhasi dihapus!');
    }
}