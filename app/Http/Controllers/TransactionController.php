<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\User;
use App\Models\PetShop;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $shops = PetShop::all();
        return view('petshops')->with('shops', $shops);
    }

    public function getSelection(PetShop $shop)
    {
        $user = Auth::user()->with('pet')->find(Auth::id());
        $pets = $user->pet;
        if($pets){
            return view('petshops.create')->with([ //redirect to pet shop page example: petshops/Petcare
                'shop' => $shop,
                'user' => $user,
                'pets' => $pets
            ]);
        }
        else{
            return view('pets.index')->with(['pets' => null, 'user' => Auth::user()]);
        }
    }

    public function postSelection(Request $request)
    {
        $credentials = $request->validate([ // validate inputted email and password
            'petshop' => 'required',
            'user' => 'required',
            'pet' => 'required',
            'type' => 'required|in:Groom,Clinic'
        ]);

        if($credentials != null){
            Transaction::create([
                'shop' => $request->petshop,
                'user' => $request->user,
                'pet' => $request->pet,
                'type' => $request->type,
                'status' => 'In Progress',
            ]);
            return redirect('petshops.index')->with('success', 'Transaction succesfully created.');
        }
        
        else{
            return view('pets.index')->with(['pets' => null, 'user' => Auth::user()]);
        }
    }
}
