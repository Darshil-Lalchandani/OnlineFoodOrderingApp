<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
  public function chinese()
  {
    return view('chinese');
  }
  public function italian()
  {
    return view('italian');
  }
  public function indian()
  {
    return view('indian');
  }
}
