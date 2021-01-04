<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PasangAcaraController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
            if(Auth::user()->accountype=="seller"){
                return view("tiket/pasangacara");
            }
            else{
                return abort('403');
            }
    }
}



