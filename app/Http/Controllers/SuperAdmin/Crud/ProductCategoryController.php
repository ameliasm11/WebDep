<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Kategori_Produk;

class ProductCategoryController extends SystemController
{
    public function category(){
      $page = 'SuperAdmin.Pages.Master.category';
      $modules = Module::with('Menus')->get();
      $categorys = Kategori_Produk::all();
      return view($page)->with(compact('modules','categorys'));
    }

    public function destroy($id)
    {
      $products = Kategori_Produk::findOrFail($id);
      $products->delete();
      return redirect()->route('product')->with('alert-success','Data berhasi dihapus!');
    }
}
