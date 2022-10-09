<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    function __construct(Request $request)
    {
        $this->middleware('auth');
        return view('/welcome');
    }

    
  public function index()
  {
    return view('/home');
  }
}


