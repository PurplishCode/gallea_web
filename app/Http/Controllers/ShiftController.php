<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ShiftController extends Controller
{
    public function directGuest()
    {
return view("pages.landing", [
"title" => "UDC | Landing"
]);
    }

public function welcome()
{
    return view("pages.landing",[
        "title" => "UDC | Welcome Page"
    ]);
}

    public function directLogin()
    {
        return view('pages.login', [
            "title" => "UDC | Login"
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

            $credentials = $request->only('email','password');

            if(Auth::attempt($credentials)) {
        // Authetrication checked. Do something.
    Log::info("Logged in!", $credentials);

Session::flash("successful", "Succesfully logged in!");
    return redirect()->route("home");

            } else {
                Log::info("Failed.");
                
                return redirect()->back()->with("failed", "The Login was unsucessful.");
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
toast("succesful", "The user has successfully logged in!", "top-right");

    return redirect()->route("login.display")->with("succesful", "Succesfully created an Account!");
}

public function show()
{
    return view('pages.register', [
        "title" => "UDC | Registration"
    ]);
}

public function logout()
{
    Log::info("Session is still intact",session()->all());

    Auth::logout();
    session()->flush();

// Logging info, indicating the session is now gone. Check laravel.log for information.
Log::info("Session is gone.");

return redirect()->route("login.display");


}


}