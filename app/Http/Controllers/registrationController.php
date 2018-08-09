<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    //
    public function guidelinespage()
    {
       return view('registrationguidelines');
    }
     public function agentpage()
    {
       return view('agentregistration');
    }

 	public function projectpage()
    {
       return view('projectregistration');
    }
    public function complaintpage()
    {
       return view('complaintregistration');
    }
	public function formdownloadpage()
    {
       return view('formdownloadreg');
    }
	public function usermanualpage()
    {
       return view('usermanual');
    }

}
