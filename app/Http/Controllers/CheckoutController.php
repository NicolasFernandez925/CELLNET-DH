<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CheckoutController extends Controller
{
    public function indexCheckout(){
       
           return view('checkout');
        }

      
}
   

