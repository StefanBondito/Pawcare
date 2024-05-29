<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use App\Http\Requests\StorePetOwnerRequest;
use App\Http\Requests\UpdatePetOwnerRequest;

class PetOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetOwnerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetOwner  $petOwner
     * @return \Illuminate\Http\Response
     */
    public function show(PetOwner $petOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetOwner  $petOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(PetOwner $petOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetOwnerRequest  $request
     * @param  \App\Models\PetOwner  $petOwner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetOwnerRequest $request, PetOwner $petOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetOwner  $petOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetOwner $petOwner)
    {
        //
    }
}
