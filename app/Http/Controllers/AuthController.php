<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view('auth.login');
    }
    function login(Request $request){
        $request->validate([
            'nisn' => 'required|max:30',
            'password' => 'required|min:8',
        ],[
            'nisn.required' => 'nisn harus diisi',
            'password.required' => 'Password harus diisi'
        ]);
        $infologin=[
            'nisn' => $request->nisn,
            'password' => $request->password,
        ];
        if(Auth::attempt($infologin)){
            if(Auth::user()->level=='admin'){
                return redirect('/pemilsos');
            }elseif(Auth::user()->level=='user'){
                return redirect('/pemilsos/user');
            }
        }
        else{
            return redirect ('')->withErrors('Username atau Password salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
