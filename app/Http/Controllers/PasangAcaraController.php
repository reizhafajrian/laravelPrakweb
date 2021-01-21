<?php

namespace App\Http\Controllers;

use App\Tiket;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    public function post(Request $request){
        $tiket=new Tiket();
        $dataImage=array();
        // dd($request->file("images"));
        $images=$request->file("images");
        foreach($images as $i ){
            $url = $i->store("images","public");
            $path="storage/$url";
            array_push($dataImage,$path);
        }
        $upperNama=strtoupper($request->namaacara);
        $tiket->gambar=$dataImage;
        $tiket->email=Auth::user()->email;
        $tiket->lokasi=$request->lokasi;
        $tiket->mulai=$request->mulai;
        $tiket->berakhir=$request->akhir;
        $tiket->nama=$upperNama;
        $tiket->kategori=$request->kategori;
        $tiket->desc=$request->textarea;
        $tiket->harga=$request->harga;
        $tiket->save();
        return redirect("/pasangacara");
    }
}



