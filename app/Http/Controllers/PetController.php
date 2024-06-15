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
        return view('pets.manage', [
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
        // $request->save();
        // dd($user);
        // dd($user->id);
        Pet::create([
            'name' => $request->name,
            'type' => $request->type,
            'breed' => $request->breed,
            'dateOfBirth' => $request->dateOfBirth,
            'age' => $request->age,
            'user_id' => $request->user_id,
        ]);

        return redirect('pets')->with('success', 'Pet added successfully.');
    }

    public function show(Pet $pet)
    {
        //
    }

    public function edit(Pet $pet)
    {
        $user = Auth::user();
        return view('pets.create', [
            'user' => $user,
        ]);
    }


    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name'=>'required|string',
            'type'=>'required|string',
            'breed'=>'required|string',
            'dateOfBirth'=>'required|string',
            'age'=>'required|numeric',
        ]);

        $pet->update([
            'name' => $request->name,
            'type' => $request->type,
            'breed' => $request->breed,
            'dateOfBirth' => $request->dateOfBirth,
            'age' => $request->age
        ]);

        return redirect('pets')->with('success', 'Pet updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        //
    }
}
