<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShiftController extends Controller
{
    public function directGuest()
    {
return view("pages.landing", [
"title" => "DUG | Landing"
]);
    }

    public function directLogin()
    {
        return view('pages.login', [
            "title" => "UDG | Login"
        ]);
    }

    public function listData()
    {
        $dataUser = DB::table("users")->get();
    
    return view("users.list",[
        "title" => "UDC | Data Pengguna",
        "dataUser" => $dataUser
    ]);
    }

    public function login(Request $request)
    {
      $dataValidate = User::where('email', $request->email)->first();

        if($dataValidate && Hash::check($request->password, $dataValidate->password)) {
        $credentials = ["email" => $dataValidate->email, "password" => $request->password];

        if(Auth::attempt($credentials)) {
            // do Something nerd.
            return redirect()->route("/list-gallery")->with("succesful", "Login is succesful!");
        }
        }
    }

    public function register(Request $request)
    {
    $request->validate([
"username" => "string|required|max:20",
"email" => "string|required|max:25",
"password" => "string|required|max:15",
"namaLengkap" => "string|required|max:25",
"alamat" => "string|required|max:254"
    ]);

    $fullData = [
"username" => $request->username,
"email" => $request->email,
"password" => Hash::make($request->password),
"namaLengkap" => $request->namaLengkap,
"alamat" => $request->alamat

    ];



    User::create($fullData);

    return view("pages.login")->with("succesfull", "Succesfully created an Account!");
}

public function show()
{
    return view('pages.register', [
        "title" => "UDC | Registration"
    ]);
}
}