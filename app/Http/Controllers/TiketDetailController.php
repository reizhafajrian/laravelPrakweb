<?php

namespace App\Http\Controllers;

use App\Tiket;
use Illuminate\Http\Request;

class TiketDetailController extends Controller
{
    public function index($id){
        // dd($id);
        $tiket=new Tiket();
        $data=$tiket->find($id);
        if($data != null){

            return view("tiketdetail/tiketdetail",compact("data"));
        }
        else{
            return abort(404);
        }
      
    }
}
