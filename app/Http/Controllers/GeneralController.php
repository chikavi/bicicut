<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class GeneralController extends Controller
{
   public function map(){
	return view('general.map');
   }
   public function funciona(){
	return view('general.funciona');
   }
   public function ventajas(){
   	return view('general.ventajas');
   }

   public function profile($slug){

   	$user = user::where('slug','=',$slug)->firstOrFail();
   	return view('general.profile')->with(compact('user'));
   }
   public function admin(){
      return view('general.admin');
   }
}
