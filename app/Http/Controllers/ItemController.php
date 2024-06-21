<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\ItemType;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartContent;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Requests\StoreShoppingCartRequest;
use App\Http\Requests\UpdateShoppingCartRequest;

class ItemController extends Controller
{
    public function index()
    {
        $user = Auth::user()->load(['cart.content.item.itemCategory']);
        $cart = $user->cart;
        $items = Item::all();
        $types = ItemType::all();

        return view("items.index", [
            "items" => Item::all(),
            'cart' => $cart,
            'contents' => $cart->content,
            'itemType' => $types,
            'user' => $user,
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
        $admin = Auth::user()->with('accType')->find(Auth::user()->account_type); // gets the current user info
        $type = $admin->accType;
        if($user->account_type == 1){
            return view('items.create', [
                'user' => Auth::user(),
                'admin' => $admin,
                'type' =>$type,
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

        return redirect()->route('items.manage')->with('success', 'Item has been added to list');
    }

    public function storeCart(StoreShoppingCartRequest $request)
    {
        $user = Auth::user()->with('cart')->find(Auth::user()->id);

        dd($user);

        if($user){
            $cart = $user->cart;
            // Retrieve validated data from the request
            $validatedData = $request->validated();

            // Retrieve the items array from the validated data
            $items = $validatedData['item'];
            $totalItems = $validatedData['total_items'];
            $totalPrice = $validatedData['total_price'];

            ShoppingCart::where('user_id', $user->id)->updateOrCreate(
                ['cart_total_items' => $totalItems],
                ['cart_price' => $totalPrice]
            );

            // Perform saving logic here, for example:
            foreach ($items as $itemId => $itemData) {
                // Save or update the item in the shopping cart
                ShoppingCartContent::where('cart_id', $cart->id)->updateOrCreate(
                    ['item_id' => $itemData['id']],
                    ['item_count' => $itemData['quantity']]
                );
            }

            // Optionally, you can return a response or redirect
            return redirect()->route('cart.index')->with('success', 'Cart saved successfully');
        }
        else{
            return redirect()->route('cart.index')->with('failed', 'Error');
        }
    }

    public function edit(Item $item)
    {
        $user = Auth::user();
        $admin = Auth::user()->with('accType')->find(Auth::user()->account_type); // gets the current user info
        $type = $admin->accType;
        if($user->account_type == 1){
            return view('items.edit', [
                'user' => Auth::user(),
                'itemTypes' => ItemType::orderBy('id')->get(),
                'item'=>$item,
                'admin' => $admin,
                'type' =>$type,
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

        return redirect()->route('items.manage')->with('success', 'Item has been added to list');
    }

    public function delete(Item $item)
    {
        $item->delete();
        return redirect()->route('items.manage')->with('items', 'Item Data Deleted');
    }
}
