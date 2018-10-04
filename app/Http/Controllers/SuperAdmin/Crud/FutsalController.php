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
  //SEMUA FUNCTION JADWAL DI SINI !
  public function index()
  {
      $page = 'SuperAdmin.Pages.Product.Futsal.futsal';
      $modules = Module::with('Menus')->get();
      $products = Produk::all();
      $data = Jadwal::all();
      return view($page)->with(compact('modules','data','products'));
  }
  public function newJadwal()
  {
        $page = 'SuperAdmin.Pages.Product.Futsal.newJadwal';
        $modules = Module::with('Menus')->get();
        return view($page)->with(compact('modules'));
  }

  public function SaveJadwal(Request $request){
        $this->validate($request, [
          'lapangan_id'   => 'required',
          'tanggal'   => 'required',
          'jam'   => 'required',
        ]);
          $jadwal = new Jadwal();
          $jadwal->lapangan_id = $request->get('lapangan_id');
          $jadwal->tanggal = $request->get('tanggal');
          $jadwal->jam = $request->get('jam');
          // $jadwal->status = $request->get('status');
          $jadwal->save();
          return redirect()->route('superadmin.futsal.index')->with('alert','Berhasil Menambahkan data');
  }

  public function editJadwal($id)
  {
    $page = 'SuperAdmin.Pages.Product.Futsal.UpdateJadwal';      // $user = Users::find($id);
    $editJadwal = Jadwal::findOrFail($id);
    $modules = Module::with('Menus')->get();
    return view($page)->with(compact('modules','editJadwal'));
  }

  public function updateJadwal(Request $request, $id)
  {
    $updateJadwal = Jadwal::findOrFail($id);
    $updateJadwal->tanggal = $request->tanggal;
    $updateJadwal->jam = $request->jam;
    $isSuccess = $updateJadwal->save();
    if ($isSuccess) {
      // return success
      return redirect()->route('superadmin.futsal.index')->with('alert','Data berhasil diubah!');
    }
    else {
      // returm failed
      return redirect()->route('superadmin.futsal.editJadwal')->with('alert','Data tidak berhasil diubah!');
    }
    $updateJadwal->reset();
    return redirect()->route('superadmin.futsal.editjadwal');
   }

   public function jadwalStatus(Request $request, $id){
     $jadwalStatus = Jadwal::findOrFail($id);
     if($jadwalStatus->status == 0 || null){
       $jadwalStatus->status = $request->status = 1;
       $jadwalStatus->save();
      // dd($jadwalStatus);
      return redirect()->route('superadmin.futsal.index');
     }
     else {
       $jadwalStatus->status = $request->status = 0;
       $jadwalStatus->save();
       return redirect()->route('superadmin.futsal.index');
     }
   }

   public function deleteJadwal($id)
   {
     $deleteJadwal = Jadwal::findOrFail($id);
     $deleteJadwal->delete();
     return redirect()->route('superadmin.futsal.index')->with('alert','Data berhasil dihapus!');
   }
  //END JADWAL

    public function tempat()
    {
        $page = 'SuperAdmin.Pages.Product.Futsal.futsal_tempat';
        $modules = Module::with('Menus')->get();
        $products = Produk::all();
        $data = Tempat::all();
        return view($page)->with(compact('modules','data','products'));
    }

    //SEMUA FUCTION LAPANGAN DISINI  !
    public function lapangan()
    {
        $page = 'SuperAdmin.Pages.Product.Futsal.futsal_lapangan';
        $modules = Module::with('Menus')->get();
        $products = Produk::all();
        $data = Lapangan::with('Tempat')->get();

        // $data = Tempat::all();
        // return $data->tm_tempat->nama;
        //return $data->tm_tempat->nama;
        return view($page)->with(compact('modules','data','products'));
    }

    public function newLapangan()
      {
          $page = 'SuperAdmin.Pages.Product.Futsal.newLapangan';
          $modules = Module::with('Menus')->get();
          $tempats = Tempat::all();
          return view($page)->with(compact('modules', 'tempats'));
    }

    public function createLapangan(Request $request)
        {

            $data = new Lapangan();
            $data->nama = $request->input('nama');
            $data->ket = $request->input('ket');
            $data->tempat_id = $request->input('tempat_id');
            // $data = Lapangan::where('tempat_id')->first();
            $data->save();
            return redirect()->route('superadmin.futsal.lapangan')->with('alert-success','Data berhasil ditambahkan!');
            $data->reset();
            return redirect()->route('superadmin.futsal.lapangan');
        }

    public function editLapangan($id)
        {
            $page = 'SuperAdmin.Pages.Product.Futsal.editLapangan';
            $modules = Module::with('Menus')->get();
            $data = Lapangan::findOrFail($id);
            return view($page)->with(compact('modules','data'));
        }

    public function updateLapangan(Request $request, $id)
        {
          $data = Lapangan::findOrFail($id);
          $data->nama = $request->nama;
          $data->ket = $request->ket;
          $isSuccess = $data->save();
          if ($isSuccess) {
            // return success
            return redirect()->route('superadmin.futsal.lapangan')->with('alert-success','Data berhasil diubah!');
          }
          else {
            // returm failed
            return redirect()->route('superadmin.futsal.lapangan')->with('alert-failed','Data tidak berhasil diubah!');
          }
          $data->reset();
          return redirect()->route('superadmin.futsal.lapangan');
         }

      public function deleteLapangan($id)
       {
           $data = Lapangan::findOrFail($id);
           $data->delete();
           return redirect()->route('superadmin.futsal.lapangan')->with('alert-success','Data berhasil dihapus!');
       }

    //SEMUA FUNCTION HARGA DI SINI !
    public function harga()
    {
        $page = 'SuperAdmin.Pages.Product.Futsal.futsal_Harga';
        $modules = Module::with('Menus')->get();
        $products = Produk::all();
        $data = Harga::all();
        return view($page)->with(compact('modules','data','products'));
    }

    public function Newharga()
    {
          $page = 'SuperAdmin.Pages.Product.Futsal.newHarga';
          $modules = Module::with('Menus')->get();
          return view($page)->with(compact('modules'));
  	}

    public function SaveHarga(Request $request){
        $this->validate($request, [
          'jadwal_id'   => 'required',
          'harga'   => 'required',
        ]);
          $harga = new Harga();
          $harga->jadwal_id = $request->get('jadwal_id');
          $harga->harga = $request->get('harga');
          $harga->save();
          return redirect()->route('superadmin.futsal.harga')->with('alert','Berhasil Menambahkan data');
    }

    public function editHarga($id)
    {
      $page = 'SuperAdmin.Pages.Product.Futsal.UpdateHarga';      // $user = Users::find($id);
      $editHarga = Harga::findOrFail($id);
      $modules = Module::with('Menus')->get();
      return view($page)->with(compact('modules','editHarga'));
    }

    public function updateHarga(Request $request, $id)
    {
      $updateHarga = Harga::findOrFail($id);
      $updateHarga->jadwal_id = $request->jadwal_id;
      $updateHarga->harga = $request->harga;
      $isSuccess = $updateHarga->save();
      if ($isSuccess) {
        // return success
        return redirect()->route('superadmin.futsal.futsal_Harga')->with('alert','Data berhasil diubah!');
      }
      else {
        // returm failed
        return redirect()->route('superadmin.futsal.editHarga')->with('alert','Data tidak berhasil diubah!');
      }
      $updateHarga->reset();
      return redirect()->route('superadmin.futsal.editHarga');
     }

     public function deleteHarga($id)
     {
       $data = Harga::findOrFail($id);
       $data->delete();
       return redirect()->route('superadmin.futsal.harga')->with('alert-success','Data berhasil dihapus!');
     }
     //END HARGA


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
    // public function newLapangan()
    //   {
    //       $page = 'SuperAdmin.Pages.Product.Futsal.newLapangan';
    //       $modules = Module::with('Menus')->get();
    //       return view($page)->with(compact('modules'));
  	// }

    // public function createLapangan(Request $request)
    //     {
    //
    //         $data = new Lapangan();
    //         $data->nama = $request->input('nama');
    //         $data->ket = $request->input('ket');
    //         // $data = Lapangan::where('tempat_id')->first();
    //         $data->tempat_id = $request->input('tempat_id');
    //         // $data->tempat_id = $request->input('tempat_id');
    //         $data->save();
    //         return redirect()->route('superadmin.futsal.lapangan')->with('alert-success','Data berhasil ditambahkan!');
    //         $data->reset();
    //         return redirect()->route('superadmin.futsal.lapangan');
    //     }

    // public function editLapangan($id)
    //     {
    //         $page = 'SuperAdmin.Pages.Product.Futsal.editLapangan';
    //         $modules = Module::with('Menus')->get();
    //         $data = Lapangan::findOrFail($id);
    //         return view($page)->with(compact('modules','data'));
    //   	}

    // public function updateLapangan(Request $request, $id)
    //     {
    //       $data = Lapangan::findOrFail($id);
    //       $data->nama = $request->nama;
    //       $data->ket = $request->ket;
    //       $isSuccess = $data->save();
    //       if ($isSuccess) {
    //         // return success
    //         return redirect()->route('superadmin.futsal.lapangan')->with('alert-success','Data berhasil diubah!');
    //       }
    //       else {
    //         // returm failed
    //         return redirect()->route('superadmin.futsal.lapangan')->with('alert-failed','Data tidak berhasil diubah!');
    //       }
    //       $data->reset();
    //       return redirect()->route('superadmin.futsal.lapangan');
    //      }

      // public function deleteLapangan($id)
      //  {
      //      $data = Lapangan::findOrFail($id);
      //      $data->delete();
      //      return redirect()->route('superadmin.futsal.lapangan')->with('alert-success','Data berhasil dihapus!');
      //  }
       //order
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
               $orderStatus = Produk::findOrFail($id);
               if($orderStatus->status == 0 || null){
                 $orderStatus->status = $request->status = 1;
                 $orderStatus->save();
                // dd($jadwalStatus);
                return redirect()->route('product');
               }
               else {
                 $orderStatus->status = $request->status = 0;
                 $orderStatus->save();
                 return redirect()->route('product');
               }
             }

}
