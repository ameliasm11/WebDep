<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\model\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Alert;

class ControllerLogin extends Controller
{
  public function doLogin(Request $request){
      $this->validate($request, [
          'email'     => 'required|email',
          'password'  => 'required|min:3'
      ]);

      $superadmin_data =  array(
          'email'     => $request->get('email'),
          'password'  => $request->get('password')
           );

       // dd(Users::get());\
      if (Auth::guard()->attempt($superadmin_data))
      {
        $email = $superadmin_data['email'];
        $data = \App\model\Users::where('email',$email)->first();
        $res['status'] = true;
        $res['code'] = 200;
        $res['message'] = "Success!";
        $res['id'] = $data['id'];
        $res['name'] = $data['name'];
        $res['email'] = $data['email'];
        $res['password'] = $data['password'];
        return response($res);
      }
      else
      {
        $res['status'] = "Bad request";
        $res['code'] = 400;
        $res['message'] = "Email dan password salah";
        return response($res);

      }
  }

  public function logout(Request $request){
      $this->guard()->logout();
      $request->session()->flush();

  }

  protected function guard()
  {
      return Auth::guard();
  }

  public function nama(Request $request){
  $this->validate($request, [
    $user = $request->input('id'),
    $nama = $request->input('name')
  ]);
  $data = \App\model\Users::where('id',$user)->update(['name'=>$nama]);

  if ($data) {
    $res['status'] = true;
    $res['code'] = 200;
    $res['message'] = "Success!";
    return response($res);
  }
  else{
    $res['status'] = false;
    $res['code'] = 400;
    $res['message'] = "Email dan Paaword tidak sesuai";
    return response($res);
  }
}

  public function getnama(Request $request)
  {
    $this->validate($request, [
    $username = $request->input('id')
    ]);
      $data = \App\model\Users::where('id',$username)->first();

    if ($data) {
      $res['status'] = true;
      $res['code'] = 200;
      $res['message'] = "Success!";
      $res['nama'] = $data['name'];
        return response($res);
    }
    else{
      $res['status'] = false;
      $res['code'] = 400;
      $res['message'] = "Error...";
        return response($res);
    }

  }
}
