<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    public function hii()
    {
        return view('hii');
    }

    public function welcome($name)
    {
        return view('welcome',['name'=>$name]);
    }
    public function maths()
    {
        return view('maths');
    }
    public function data(\Illuminate\Http\Request $request)
    {
        $freeText = $request->input('freeText');
   $age=$request->input('age');
   $loan = $request->input('loan');
   $mobile = $request->input('mobile');
   $adhar = $request->input('adhar');
   $pan = $request->input('pan');
   $city = $request->input('city');
   $state = $request->input('state');
   $country = $request->input('country');
   $zip = $request->input('zip');
   $tArray = array("freeText" => $freeText,"age"=>$age,"mobile"=>$mobile,"loan"=>$loan,"adhar"=>$adhar,"pan"=>$pan,"city"=>$city,"state"=>$state,"country"=>$country,"zip"=>$zip);
    return view('data',compact('tArray'));
    }
    
}
