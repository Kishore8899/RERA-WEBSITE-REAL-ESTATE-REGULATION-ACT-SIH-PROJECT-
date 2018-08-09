<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class builderController extends Controller
{
    //
   public function builderdisp()
   {
   	return view('builderlist');
   }
   public function registeredblock()
   {
   	return view('registered');
   }
}
