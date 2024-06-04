<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCartContent;
use App\Http\Requests\StoreShoppingCartContentRequest;
use App\Http\Requests\UpdateShoppingCartContentRequest;

class ShoppingCartContentController extends Controller
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
     * @param  \App\Http\Requests\StoreShoppingCartContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShoppingCartContentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShoppingCartContent  $shoppingCartContent
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCartContent $shoppingCartContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShoppingCartContent  $shoppingCartContent
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingCartContent $shoppingCartContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShoppingCartContentRequest  $request
     * @param  \App\Models\ShoppingCartContent  $shoppingCartContent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShoppingCartContentRequest $request, ShoppingCartContent $shoppingCartContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShoppingCartContent  $shoppingCartContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingCartContent $shoppingCartContent)
    {
        //
    }
}
