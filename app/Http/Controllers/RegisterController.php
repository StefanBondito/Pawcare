<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('signup',[
            'title' => 'signup',
            'active' => 'signup'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email:dns|unique:accounts',
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        $faker = Faker::create("id_ID");

        $validated['password'] = Hash::make($validated['password']);

        if($validated!=null){
            Account::create([
                'email' => $validated['email'],
                'password' => $validated['password'],
                'dateCreated' => now(),
                'fk_account_type_id' => 3,
            ]);
            return redirect('login')->with('success', 'Account succesfully created.');
        }
    }
}