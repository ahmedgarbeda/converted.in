<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //

    public function openLoginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credencials = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credencials)){
            return redirect()->route('index');
        }else{
            toast('invalid credentials','error','top-left');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
