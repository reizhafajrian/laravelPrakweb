<?php

namespace App\Http\Controllers;

use App\Tiket;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $tiket=new Tiket();
        $data=$tiket->all();

        return view('pesantiket/pesantiket', compact("data"));
    }
}
