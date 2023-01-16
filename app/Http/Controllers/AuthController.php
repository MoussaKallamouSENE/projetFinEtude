<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexOffice(){
        return view('office.auth.login');
    }

    public function loginOffice(LoginRequest $request){

        if(! Auth::attempt([
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ])){
            return back()->withErrors([
                'email' => 'Les identifiants fournis ne correspond pas !',
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function logoutOffice(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('office-login');
    }
    
}
