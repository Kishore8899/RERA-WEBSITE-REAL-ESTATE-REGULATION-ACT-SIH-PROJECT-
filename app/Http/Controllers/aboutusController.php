<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutusController extends Controller
{
    //
    public function rtipage()
    {
       return view('rti');
    }
    public function recruitmentpage()
    {
    	return view('recruitment');	
    }
    public function servicespage()
    {
    	return view('services');	
    }
    public function homepage()
    {
    	return view('homepage');	
    }
    public function reachuspage()
    {
    	return view('reachus');
    }
}
