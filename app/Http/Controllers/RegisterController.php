<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('signup',[
            'title' => 'signup',
            'active' => 'signup'
        ]);
    }

    public function store()
    {
        return request()->all();
    }
}