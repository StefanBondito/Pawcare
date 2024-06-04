<?php

namespace App\Http\Controllers;

use App\Models\ShopContactInfo;
use App\Http\Requests\StoreShopContactInfoRequest;
use App\Http\Requests\UpdateShopContactInfoRequest;

class ShopContactInfoController extends Controller
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
     * @param  \App\Http\Requests\StoreShopContactInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopContactInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopContactInfo  $shopContactInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ShopContactInfo $shopContactInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShopContactInfo  $shopContactInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopContactInfo $shopContactInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopContactInfoRequest  $request
     * @param  \App\Models\ShopContactInfo  $shopContactInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopContactInfoRequest $request, ShopContactInfo $shopContactInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopContactInfo  $shopContactInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopContactInfo $shopContactInfo)
    {
        //
    }
}
