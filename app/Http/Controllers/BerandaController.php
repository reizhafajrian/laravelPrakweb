<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\GetData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    
    public function index(){
        if(Auth::check()){
           if(Auth::user()->accountype=="buyer"){
               $GetData=new GetData();
               $GetData->setData("seller");
               $data="seller";
                return view("home/home",compact("data"));
           }
            else{
                return view("home/home");
            }
        }
        else{
            return view("home/home");
        }
       
      
    }
    //
    public function data(){
        if(Auth::check()){
            if(Auth::user()->accountype=="seller"){
                $data="seller";
                return $data;
            }
    }
}
}
