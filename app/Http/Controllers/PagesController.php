<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      public function getCoupon(){
        
        return view('pages.coupon');       
    }
    
     public function getStore(){
     
        return view('pages.store');
    }
    
  
    
}
