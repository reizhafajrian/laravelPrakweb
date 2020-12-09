<?php

namespace App\Http\Controllers;
use App\User;//panggil class User seperti import di python
use Illuminate\Http\Request; //panggil class request

class UserController extends Controller
{
    public function index(){
        $user=User::all();//menampilkan semua data user
        return response()->json($user);//merespon user dalam bentuk json
    }
    public function create(){
        return view('login/login');//view yang di tampilkan terdapat didalam folder view folder login dan file blade login
    }
    public function store(Request $request)
    {
 
        if( $request->header("Token")=="LDb9jIch5DfAnnTpwgkGiCuV7sAlJRSOactjvqr7"){
        $user = new User();//membuat inisialisasi bahwa $user adalah class User()
        $user->name = $request->name;//mengisi name di class dengan get input di dalam html berupa name
        $user->email = $request->email;//mengisi email di class dengan get input di dalam html berupa email
        $user->password = $request->password;//mengisi password di class dengan get input di dalam html berupa password
        $user->accountype = $request->accountype;//mengisi account type di class dengan get input di dalam html berupa accountype
        $user->agreement = $request->agreement;//mengisi agreement di class dengan get input di dalam html berupa agreement
        $user->save();//mensave data kedalam mongodb
        return response()->json(["message"=>"true"]);
        }
        else{
            return response()->json(["message"=>"Error Can't Find The Token"]);
        }
    }

}
