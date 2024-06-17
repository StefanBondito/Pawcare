<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\ItemType;
use Illuminate\Http\Request;
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
        $admin = Auth::user()->with('accType')->find(Auth::user()->account_type); // gets the current user info
        $type = $admin->accType;
        return view("items.manage", [
            'admin' => $admin,
            'type' =>$type,
            "items"=>Item::all(),
        ]);
    }
    public function create()
    {
        $user = Auth::user();
        if($user->account_type == 1){
            return view('items.create', [
                'user' => Auth::user(),
                "itemTypes" => ItemType::orderBy('id')->get(),
            ]);
        }
        else{
            return redirect()->route('items.index')->with('error', 'You do not have access');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'item_type'=>'required|string',
            'price'=>'required|numeric',
        ]);

        Item::create([
            'name' => $request->name,
            'type_id' => $request->item_type,
            'price' => $request->price,
        ]);

        return redirect()->route('items.index')->with('success', 'Item has been added to list');
    }

    public function show(Item $item)
    {
        //
    }

    public function edit(Item $item)
    {
        $user = Auth::user();
        if($user->account_type == 1){
            return view('items.edit', [
                'user' => Auth::user(),
                'itemTypes' => ItemType::orderBy('id')->get(),
                'item'=>$item,
            ]);
        }
        else{
            return redirect()->route('items.index')->with('error', 'You do not have access');
        }
    }

    public function update(Request $request, Item $item)
    {
        $user = Auth::user()->account_type == 1;
        $request->validate([
            'name'=>'required|string',
            'item_type'=>'required|string',
            'price'=>'required|numeric',
        ]);

        $item->update([
            'name' => $request->name,
            'type_id' => $request->item_type,
            'price' => $request->price,

        ]);

        return redirect()->route('items.index')->with('success', 'Item has been added to list');
    }

    public function delete(Item $item)
    {
        $item->delete();
        return redirect('items.manage')->with('items', 'Item Data Deleted');
    }
}
