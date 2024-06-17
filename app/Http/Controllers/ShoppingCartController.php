<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartContent;
use App\Http\Requests\StoreShoppingCartRequest;
use App\Http\Requests\UpdateShoppingCartRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\ItemType;
use Illuminate\Http\Request;


class ShoppingCartController extends Controller
{

    public function index()
    {
        $user = Auth::user()->load(['cart.content.item.itemType']);
        // dd($user->cart);
        $cart = $user->cart;
        $items = Item::all();
        $types = ItemType::all();

        return view('cart.index')->with([
            'items'=> $items,
            'cart'=> $cart,
            'contents' => $cart->content,
            'itemType' => $types,
            'user' => $user
        ]);
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
     * @param  \App\Http\Requests\StoreShoppingCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShoppingCartRequest $request)
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShoppingCartRequest  $request
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShoppingCartRequest $request, ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingCart $shoppingCart)
    {
        //
    }
}
