<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePetRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePetRequest;

class PetController extends Controller
{

    public function index()
    {
        $user = Auth::user()->with('pet')->find(Auth::id());
        $pets = $user->pet;
        // dd($pets);
        if($pets){
            return view('pets.index')->with(['pets' => $pets, 'user' => Auth::user()]);
        }
        else{
            return view('pets.index')->with(['pets' => null, 'user' => Auth::user()]);
        }
    }

    public function manage(){
        $admin = Auth::user()->with('accType')->find(Auth::user()->account_type); // gets the current user info
        $type = $admin->accType;
        return view('pets.manage', [
            'admin' => $admin,
            'type' =>$type,
            'pets'=>Pet::all(),
        ]);
    }
    public function create()
    {
        $user = Auth::user();
        return view('pets.create', [
            'user' => $user,

        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name'=>'required|string',
            'type'=>'required|string',
            'breed'=>'required|string',
            'dateOfBirth'=>'required|string',
            'age'=>'required|numeric',
        ]);
        $request->user_id = $user->id;
        Pet::create([
            'name' => $request->name,
            'type' => $request->type,
            'breed' => $request->breed,
            'dateOfBirth' => $request->dateOfBirth,
            'age' => $request->age,
            'user_id' => $request->user_id,
        ]);

        return redirect('pets')->with('success', 'Pet Data Added Successfully.');
    }

    public function show(Pet $pet)
    {

    }

    public function edit(Pet $pet)
    {
        $user = Auth::user();
        return view('pets.edit', [
            'user' => $user,
            'pet' => $pet,
        ]);
    }

    public function update(Request $request, Pet $pet)
    {
        $user = Auth::user();
        $request->validate([
            'name'=>'required|string',
            'type'=>'required|string',
            'breed'=>'required|string',
            'dateOfBirth'=>'required|string',
            'age'=>'required|numeric',
        ]);
        $request->user_id = $user->id;
        $pet->update([
            'name' => $request->name,
            'type' => $request->type,
            'breed' => $request->breed,
            'dateOfBirth' => $request->dateOfBirth,
            'age' => $request->age,
            'user_id' => $request->user_id,
        ]);

        return redirect('pets')->with('success', 'Pet Data Updated Successfully.');
    }

    public function delete(Pet $pet)
    {
        $pet->delete();
        return redirect('pets.manage')->with('success', 'Pet Data Deleted Successfully');
    }
}
