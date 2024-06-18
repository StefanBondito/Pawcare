<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountType;
use App\Models\User;
use App\Models\Item;
use Session;
use Illuminate\Support\Facades\{Auth, Hash};
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function homeGet() // home page
    {
        $user = Auth::user();
        if($user){
            $user->load('accType'); // gets the current user info
            $type = $user->accType;
            if($user->account_type == 3){ // check if user is logged in
                return view('home_user', ['user' => $user]); // if user
            }
            elseif($user->account_type == 1){ // check if user is admin
                $customerCounter = User::with('accType')->where('account_type', 3)->get()->count();
                $productCounter = Item::all()->count();

                return view('dashboard', [
                    'user' => $user,
                    'type' => $type,
                    'customerCounter' => $customerCounter,
                    'productCounter' => $productCounter,

                ]); // if admin
            }
        }
        else{
            return view('home'); // if guest
        }
    }

    public function admin_homeGet() // home page
    {
        $user = Auth::user(); // gets the current user info

        if($user){
            return view('home_user', ['user' => $user]); // if user
        }
        else{
            $user = 'Guest';
            return view('home', ['user' => $user]); // if guest
        }
    }

    public function loginGet() // login page
    {
        $title = 'Login';
        $active = 'login';
        return view('login', compact('title', 'active'));

    }

    public function signUpGet() // sign up or registration page
    {
        $title = 'Signup';
        $active = 'signup';

        return view('signup', compact('title', 'active'));
    }

    public function loginPost(Request $request) // login activity
    {
        $credentials = $request->validate([ // validate inputted email and password
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $remember = $request->has('remember'); // will keep user logged in even after tab is closed

        if(Auth::guard('web')->attempt($credentials, $remember)){ // attempt to check credentials on User
            $request->session()->regenerate();
            $user = Auth::user()->find(Auth::user()->id);
            switch ($user->account_type) {
                case 1:
                    return redirect()->intended('dashboard')->with('user', $user); //nothing yet
                case 2:
                    return redirect()->intended('home_petshop'); //nothing yet
                case 3:
                    return redirect()->intended('home_user')->with('user', $user);
                default:
                    return redirect()->intended('/')->with('user', $user);
            }
        }

        return back()->with('loginError', 'Login Failed! Incorrect email or password.');
        // dd('Login successful');
    }

    public function registerPost(Request $request) // sinup or register activity
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        if($validated!=null){
            User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => $validated['password'],
                'account_type' => 3
            ]);
            return redirect('login')->with('success', 'Account succesfully created.');
        }
    }
    public function logoutPost()
    {
        Session::flush();

        Auth::logout();

        return redirect('login')->with('logout', 'Succesfully logged out.');
    }
}
