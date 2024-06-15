<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;

class PetController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth')->except(['create','store']);
    // }

    public function index()
    {
        // $pets = Pet::join()
        return view('pets.index', [
            'pets'=>Pet::all(),
        ]);
    }

    public function manage(){
        return view('pets.manage', [
            'pets'=>Pet::all(),
        ]);
    }
    public function create()
    {
        return view('pets.create', [
            'user' => Auth::user(),
        ]);
    }

    public function store(StorePetRequest $request)
    {
        $request->validate([
            'name'=>'required|string',
            'type'=>'required|string',
            'breed'=>'required|string',
            'dateOfBirth'=>'required|string',
            'age'=>'required|numeric',
        ]);

        Pet::create([
            'name' => $request->name,
            'type' => $request->type,
            'breed' => $request->breed,
            'dateOfBirth' => $request->dateOfBirth,
            'age' => $request->age,
        ]);

        return redirect()->route('pets.index')->with('success', true);
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
