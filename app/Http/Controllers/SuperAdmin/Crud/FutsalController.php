<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;
use App\model\Module;
use App\model\Role;
use App\model\Produk;
use App\model\Jadwal;
use App\model\Order;
use App\model\Lapangan;
use App\model\Harga;
use App\model\Tempat;

class FutsalController extends SystemController
{
  public function index()
  {
      $page = 'SuperAdmin.Pages.Product.Futsal.futsal';
      $modules = Module::with('Menus')->get();
      $products = Produk::all();
      $data = Jadwal::all();

      // $accesses = Module::with('Access')->get();
      return view($page)->with(compact('modules','data','products'));
  }

    public function order()
    {
        $page = 'SuperAdmin.Pages.Product.Futsal.futsal_Order';
        $modules = Module::with('Menus')->get();
        $products = Produk::all();
        $data = Order::all();
        // $accesses = Module::with('Access')->get();
        return view($page)->with(compact('modules','data','products'));
    }

    public function tempat()
    {
        $page = 'SuperAdmin.Pages.Product.Futsal.futsal_tempat';
        $modules = Module::with('Menus')->get();
        $products = Produk::all();
        $data = Tempat::all();
        // $accesses = Module::with('Access')->get();
        return view($page)->with(compact('modules','data','products'));
    }

    public function lapangan()
    {
        $page = 'SuperAdmin.Pages.Product.Futsal.futsal_lapangan';
        $modules = Module::with('Menus')->get();
        $products = Produk::all();
        $data = Lapangan::all();
        // $accesses = Module::with('Access')->get();
        return view($page)->with(compact('modules','data','products'));
    }

    public function harga()
    {
        $page = 'SuperAdmin.Pages.Product.Futsal.futsal_Harga';
        $modules = Module::with('Menus')->get();
        $products = Produck::all();
        $data = Harga::all();
        // $accesses = Module::with('Access')->get();
        return view($page)->with(compact('modules','data','products'));
    }

    public function newTempat()
      {
          $page = 'SuperAdmin.Pages.Product.Futsal.newTempat';
          $modules = Module::with('Menus')->get();
          return view($page)->with(compact('modules'));
  	}

    public function createTempat(Request $request)
        {
            $data = new Tempat();
            $data->nama = $request->input('nama');
            $data->alamat = $request->input('alamat');
            $data->deskripsi = $request->input('deskripsi');
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/gambar',$newName);
            $data->gambar = $newName;
            $data->save();
            return redirect()->route('superadmin.futsal.tempat')->with('alert-success','Data berhasil ditambahkan!');
        }

        public function editTempat($id)
          {
              $page = 'SuperAdmin.Pages.Product.Futsal.editTempat';
              $modules = Module::with('Menus')->get();
              $data = Tempat::findOrFail($id);
              return view($page)->with(compact('modules','data'));
      	}

        public function updateTempat(Request $request, $id)
    {
        $data = Tempat::findOrFail($id);
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->deskripsi = $request->input('deskripsi');
        if (empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }
        else{
            unlink('uploads/gambar/'.$data->gambar); //menghapus file lama
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/gambar',$newName);
            $data->gambar = $newName;
        }
        $data->save();
        return redirect()->route('superadmin.futsal.tempat')->with('alert-success','Data berhasil diubah!');
      }

      public function deleteTempat($id)
    {
        $data = Tempat::findOrFail($id);
        $data->delete();
        return redirect()->route('superadmin.futsal.tempat')->with('alert-success','Data berhasil dihapus!');
    }

    //lapangan
    public function newLapangan()
      {
          $page = 'SuperAdmin.Pages.Product.Futsal.newLapangan';
          $modules = Module::with('Menus')->get();
          return view($page)->with(compact('modules'));
  	}

    public function createLapangan(Request $request)
        {
            $data = new Lapangan();
            $data->ket_lapangan = $request->input('ket_lapangan');
            $data->tempat_id = $request->input('tempat_id');
            $data->save();
            return redirect()->route('superadmin.futsal.lapangan')->with('alert-success','Data berhasil ditambahkan!');
        }

}
