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
        $email = $request->input('email'),
        $password = $request->input('password')
      ]);ss


        $data = new \App\model\Users();
        $data->email = $email;
        $data->password = $password;

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
