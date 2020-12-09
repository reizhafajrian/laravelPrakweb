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
        $user = new User();//membuat inisialisasi bahwa $user adalah class User()
        $user->name = $request->get('name');//mengisi name di class dengan get input di dalam html berupa name
        $user->email = $request->get('email');//mengisi email di class dengan get input di dalam html berupa email
        $user->password = $request->get('password');//mengisi password di class dengan get input di dalam html berupa password
        $user->accountype = $request->get('accountype');//mengisi account type di class dengan get input di dalam html berupa accountype
        $user->agreement = $request->get('agreement');//mengisi agreement di class dengan get input di dalam html berupa agreement
        $user->save();//mensave data kedalam mongodb
        return redirect('login');//mengarahkan data ketika berhasil di save
    }

}
