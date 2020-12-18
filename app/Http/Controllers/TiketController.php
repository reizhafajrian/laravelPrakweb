<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Tiket;
use Illuminate\Support\Facades\Auth;

class TiketController extends Controller
{
    //
    public function store(Request $request){
        $file=$request->file('file');
        // $file=$file->store('images','public');
        foreach ($file as $filenames){
            $filenames=$filenames->store('images','public');
            echo($filenames);
    }
  
        // $path = ("storage/$file");
        // dd($file);
        // 
        // // $tiket=new Tiket();
        // // $tiket=$path;
        // return response()->json(["test"=>"$path"]);
         // return view('/login/login',compact('path'));
        //      
    // }
    
    }
    public function coba(){
        
    }



       
       

    public function getStore(Request $request){
        $filename= $request->file;
        dd($filename);
     //    $path = ("storage/$filename");
     //    $tiket=new Tiket();
     //    $tiket=$path;
 
 
         // return view('/login/login',compact('path'));
        
     }
}
