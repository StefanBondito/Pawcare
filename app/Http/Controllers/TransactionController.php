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
        $user = Auth::user();
        $shops = PetShop::all();
        return view('petshops.index')->with([
            'shops'=> $shops,
            'user' =>$user,
        ]);
    }

    public function manage(){
        $admin = Auth::user()->with('accType')->find(Auth::user()->account_type); // gets the current user info
        $type = $admin->accType;
        return view('petshops.manage', [
            'admin' => $admin,
            'type' =>$type,
            "transactions"=>Transaction::all(),
        ]);
    }

    public function create($shop)
    {
        $shop = PetShop::findOrFail($shop);
        // dd($shop);
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

    public function store(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([ // validate inputted email and password
            'petshop' => 'required',
            'user' => 'required',
            'pet' => 'required',
            'type' => 'required|in:Groom,Clinic'
        ]);

        if($credentials){
            Transaction::create([
                'petshop_id' => $request->petshop,
                'user_id' => $request->user,
                'pet_id' => $request->pet,
                'type' => $request->type,
                'status' => 'In Progress',
            ]);
            return redirect()->route('petshops.index')->with('success', 'Transaction succesfully created.');
        }

        // else{
        //     return view('pets.index')->with(['pets' => null, 'user' => Auth::user()]);
        // }
    }
}
