<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
