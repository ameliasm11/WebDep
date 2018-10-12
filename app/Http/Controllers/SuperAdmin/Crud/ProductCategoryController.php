<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\KategoriProduk;
use App\model\Produk;
use App\model\Partnercompany;

class ProductCategoryController extends SystemController
{
    public function category(){
      $page = 'SuperAdmin.Pages.Master.category';
      $modules = Module::with('Menus')->get();
      $categorys = KategoriProduk::all();
      return view($page)->with(compact('modules','categorys'));
    }

    public function destroy($id)
    {
      $products = KategoriProduk::findOrFail($id);
      $products->delete();
      return redirect()->route('category')->with('alert-success','Data berhasi dihapus!');
    }
}
