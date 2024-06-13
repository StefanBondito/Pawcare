<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    public function index()
    {
        return view("items.index", [
            "items" => Item::all(),
            'user' => Auth::user(),
        ]);
    }

    public function manage(){
        return view("items.manage", [
            "items"=>Item::all()
        ]);
    }
    public function create()
    {
        return view('items.create', [
            'user' => Auth::user(),
        ]);
    }

    public function store(StoreItemRequest $request)
    {
        $request->validate([
            'name'=>'required|string',
            'type'=>'required|string',
            'price'=>'required|numeric',
        ]);

        Item::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,

        ]);

        return redirect()->route('items.index')->with('success', true);
    }

    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
