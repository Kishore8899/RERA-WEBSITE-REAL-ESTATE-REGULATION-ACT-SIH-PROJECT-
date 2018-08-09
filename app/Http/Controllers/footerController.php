<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class footerController extends Controller
{
    public function privacypage()
    {
       return view('privacy');
    }
    public function hyperlinkingpage()
    {
       return view('hyperlinking');
    }
    public function copyrightpage()
    {
       return view('copyright');
    }
    public function disclaimerpage()
    {
       return view('disclaimer');
    }
    public function accessablitypage()
    {
       return view('accessablity');
    }
    public function termsandconditionspage()
    {
       return view('termsandconditions');
    }
    public function sitemappage()
    {
       return view('sitemap');
    }
    public function rateourwebpage()
    {
       return view('rateourweb');
    }
}
