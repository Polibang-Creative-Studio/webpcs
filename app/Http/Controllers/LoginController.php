<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view ('admin.index');
    }


public function authenticate(Request $request)
{ 
    $credentials = $request->validate([
        'name' => 'required',
        'password' => 'required'
    ]);
  
    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    } else {
        return redirect('/login')->with('warning', 'Email atau password tidak ditemukan');
    }
   
    }
}
