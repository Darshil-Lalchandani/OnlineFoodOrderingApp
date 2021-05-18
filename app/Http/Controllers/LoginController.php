<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LoginController extends Controller
{
    public function login()
    {
      return view('login');
    }
    public function loginCheck(Request $r)
    {
      $email = $r->uemail;
      $password = $r->upass;

      $session = App\Models\Login::where('email',$email)->where('password',$password)->get();

      if(count($session)>0)
          {
            $r->session()->put('user_id',$session[0]->id);
            $r->session()->put('user_name',$session[0]->name);

            return redirect('/welcome');
          }
        else
          {
            return redirect('/login')->with('msg','Invalid Credentials');
          }
      }
      public function protect(Request $v)
      {
        if($v->session()->get('user_id')=="")
          {
            return redirect('/login');
          }
        else
          {
            $username=$v->session()->get('user_name');
            $t=array('username'=>$username);
            return view('chinese')->with($t);
          }
      }
      public function logout(Request $r)
      {
            $r->session()->forget('user_id');
            $r->session()->forget('user_name');
            $r->session()->forget('cart');

            return redirect('/login');
      }
    }
