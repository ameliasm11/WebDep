<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Kategori;
use App\model\Produk;

class ProductCategoryController extends SystemController
{
    public function category(){
      $page = 'SuperAdmin.Pages.Master.category';
      $modules = Module::with('Menus')->get();
      $categorys = Kategori::all();
      return view($page)->with(compact('modules','categorys'));
    }

    public function destroy($id)
    {
      $products = Kategori::findOrFail($id);
      $products->delete();
      return redirect()->route('category')->with('alert-success','Data berhasi dihapus!');
    }
}
