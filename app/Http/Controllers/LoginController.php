<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        $remember = $request->has('remember');

        if(Auth::guard('web')->attempt($credentials, $remember)){
            $request->session()->regenerate();
            $user = Auth::user();
            switch ($user->fk_account_type_id) {
                case 1:
                    return redirect()->intended('home_admin'); //nothing yet
                case 2:
                    return redirect()->intended('home_petshop'); //nothing yet
                case 3:
                    return redirect()->intended('home_user');
                default:
                    return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login Failed! Incorrect email or password.');
        // dd('Login successful');
    }
}