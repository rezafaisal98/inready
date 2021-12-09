<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis(){
        return view('register', [
            "title" => "Registrasi"
        ]);
    }

    public function store(Request $req){
        $data = $req->validate([
            "email" => "required|email|unique:users",  
            "fullname" => "required|min:3|max:100",
            "passwd" => "required|min:5",
            "confirmpasswd" => "required|min:5"
        ]);

        User::create($data);
    }
}
