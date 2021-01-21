<?php

namespace App\Http\Controllers;

use App\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
        $tiket=new Tiket();

        $data=$tiket->latest()->paginate(8);

        return view('pesantiket/pesantiket', compact("data"));
    }

    public function show(Tiket $tiket ,$tags){

        $data=$tiket->where("kategori","=",$tags)->latest()->paginate(10);

        return view('pesantiket/pesantiket', compact("data"));
    }
    public function search(Tiket $tiket,$key){

        $data=$tiket->where("nama" ,"=",$key)->latest()->paginate(8);
        return view("pesantiket/pesantiket",compact("data"));
    }
}
