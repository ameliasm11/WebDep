<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerFutsal extends Controller
{
  public function tempat()
  {
      //
      $data = \App\model\Tempat::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
      // $res['status'] = "ok";
      // $res['code'] = 200;
      // $res['message'] = "Success!";
      $res = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    }
  }


  public function showjadwal(Request $request)
  {
        $this->validate($request, [
        $lapangan = $request->input('lapangan_id'),
        $tanggal = $request->input('tanggal')
        ]);
        $data = \App\model\Jadwal::where('lapangan_id', $lapangan)
            ->where('tanggal', $tanggal)->get();
    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
      $res['status'] = true;
      $res['code'] = 200;
      $res['message'] = "Success!";
        $res['data'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    }
  }

  public function lapangan(Request $request)
  {
    $this->validate($request, [
    $tempat = $request->input('tempat_id')
    ]);
        $data = \App\model\Lapangan::where('tempat_id',$tempat)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
      $res['status'] = true;
      $res['code'] = 200;
      $res['message'] = "Success!";
      $res['data'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    }
  }

  public function order(Request $request)
  {
    $this->validate($request, [
    $nama = $request->input('nama'),
    $nohp = $request->input('no_hp'),
    $user = $request->input('user_id'),
    $jadwal = $request->input('jadwal_id'),
    $tanggal = $request->input('tanggal'),
    $jam = $request->input('jam_pesan')
    ]);

      $data = new \App\model\Order();
      $data->nama = $nama;
      $data->no_hp = $nohp;
      $data->jadwal_id = $jadwal;
      $data->user_id = $user;
      $data->tanggal = $tanggal;
      $data->jam_pesan = $jam;
      $data->status = "false";

      if($data->save()){
        $res['status'] = "created";
        $res['code'] = 200;
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
      }
      else {
        $res['message'] = "Saving field!";
        return response($res);
      }
   }


   public function harga(Request $request)
   {
     $this->validate($request, [
     $jadwal = $request->input('jadwal_id')
     ]);
         $data = \App\model\Harga::where('jadwal_id',$jadwal)->get();

     if(count($data) > 0){ //mengecek apakah data kosong atau tidak
       $res['status'] = true;
       $res['code'] = 200;
       $res['message'] = "Success!";
       $res['data'] = $data;
         return response($res);
     }
     else{
         $res['message'] = "Empty!";
         return response($res);
     }
   }

   public function listOrder(Request $request)
   {
     $this->validate($request,[
       $user =$request->input('user_id')
     ]);

     $data = array();
     $datas = array();
     $orders = \App\model\Order::where('user_id',$user)->orderByRaw('id DESC')->get();
     foreach($orders as $order) {
       $nama = $order['nama'];
       $no = $order['no_hp'];
       $tgl = $order['tanggal'];
       $jm = $order['jam_pesan'];
       $id_jadwal = $order['jadwal_id'];
       $jadwal = \App\model\Jadwal::where('id',$id_jadwal)->first();
       $id_lapangan = $jadwal['lapangan_id'];
       $id_tempat = $jadwal['tempat_id'];
       $jam = $jadwal['jam'];
       $tanggal = $jadwal['tanggal'];
       $nama_tempat = \App\model\Tempat::where('id',$id_tempat)->first();
       $nama_lapangan = \App\model\Lapangan::where('id',$id_lapangan)->first();
       $data['nama'] = $nama;
       $data['no_hp'] = $no;
       $data['lapangan'] = $nama_lapangan['nama'];
       $data['tempat'] = $nama_tempat['nama'];
       $data['tanggal'] = $tanggal;
       $data['jam'] = $jam;
       $data['status'] = $order['status'];
       $datas[] = $data;
     }


     if(count($datas)>0){
       $res['status'] = true;
       $res['code'] = 200;
       $res['message'] = "success !";
       $res['data']= $datas;
       return response($res);
     }else {
       $res['message'] = "empty";
       return response($res);
     }
   }
}
