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
      $res['status'] = "ok";
      $res['code'] = 200;
      $res['message'] = "Success!";
        $res['values'] = $data;
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
        $lapangan = $request->input('lapangan_id')
        ]);
        $data = \App\model\Jadwal::where('lapangan_id',$lapangan)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
      $res['status'] = "ok";
      $res['code'] = 200;
      $res['message'] = "Success!";
        $res['values'] = $data;
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
      $res['status'] = "ok";
      $res['code'] = 200;
      $res['message'] = "Success!";
        $res['values'] = $data;
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
    $nama = $request->input('pemesan'),
    $nohp = $request->input('no_hp'),
    $tempat = $request->input('nama'),
    $lapangan = $request->iput('ket_lapangan'),
    $tanggal = $request->input('tanggal'),
    $jam = $request->input('jam_pesan')
    ]);

      $data = new \App\model\Order();
      $data->pemesan = $nama;
      $data->no_hp = $nohp;
      $data->nama = $tempat;
      $data->ket_lapangan = $lapangan;
      $data->tanggal = $tanggal;
      $data->jam_pesan = $jam;

      if($data->save()){
        $res['status'] = "created";
        $res['code'] = 201;
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
      }
      else {
        $res['message'] = "Saving field!";
        return response($res);
      }
   }
}
