<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class MyController extends Controller
{
    public function home($value='')
    {
      return view('welcome');
    }
    public function about($value='')
    {
      return view('first');
    }
    public function registration($value='')
    {
      return view('registration');
    }
    public function insert_data(Request $r) //r is object of request
    {
      $name = $r->uname;
      $email = $r->uemail;
      $password = $r->upass;

      $users = new App\Models\MyModel;

      $users->name = $name;
      $users->email = $email;
      $users->password = $password;

      $insert = $users->save();
      if($insert) {
        return redirect('/register')->with('success', 'Data added successfully');
      }
    }
}
