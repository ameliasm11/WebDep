<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
class ControllerRegister extends Controller
{



  public function create(Request $request)
      {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|min:3',
            'konfirmasi_password' => 'required'
        ]);

        $email = $request->get('email');
        $password = $request->get('password');
        $konfirmasi_password = $request->get('konfirmasi_password');


      if($password != $konfirmasi_password)
      {
        $res['code'] = 400;
        $res['message'] = "Confirm password is not appropriate !";
        return response($res);
      }
      else {
        $data = new \App\model\Users();
        $data->email = $email;
        $data->password = bcrypt($password);

        if($data->save()){
          $res['status'] = "created";
          $res['code'] = 200;
          $res['message'] = "Anda telah terdaftar silahkan Login";
          $res['value'] = "$data";
          return response($res);
        }
        else {
          $res['message'] = "Saving field!";
          return response($res);
        }
      }
      }
}
