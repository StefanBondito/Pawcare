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
    // public function __construct(){
    //     $this->middleware('auth');
    //     $user = Auth::user();
    //     return dd($user);
    // }

    public function index()
    {
        return view('pets.index', ['pets' => Pet::find(Auth::user()->id), 'user' => Auth::user()]);
    }

    public function manage(){
        return view('pets.manage', [
            'pets'=>Pet::all(),
        ]);
    }
    public function create()
    {
        $user = Auth::user();
        return view('pets.create', ['user' => $user]);
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
        // dd($user);
        Pet::create([
            'name' => $request->name,
            'type' => $request->type,
            'breed' => $request->breed,
            'dateOfBirth' => $request->dateOfBirth,
            'age' => $request->age,
            'user_id' => $user->id,
        ]);

        return redirect()->route('pets.index')->with('success', 'Pet added successfully.');
    }

    public function show(Pet $pet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetRequest  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetRequest $request, Pet $pet)
    {
        //
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
