<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index()
   {
      return view ('frontend.home.index');
   }
   public function contact()
   {
      return view ('frontend.contact.index');
   }
   public function shop()
   {
return view('frontend.shop.index');

   }
   public function purchase()
   {
return view('frontend.purchase.index');

   }


}