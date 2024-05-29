<?php

namespace App\Http\Controllers;

use App\Models\OrderInfo;
use App\Http\Requests\StoreOrderInfoRequest;
use App\Http\Requests\UpdateOrderInfoRequest;

class OrderInfoController extends Controller
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
     * @param  \App\Http\Requests\StoreOrderInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderInfo  $orderInfo
     * @return \Illuminate\Http\Response
     */
    public function show(OrderInfo $orderInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderInfo  $orderInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderInfo $orderInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderInfoRequest  $request
     * @param  \App\Models\OrderInfo  $orderInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderInfoRequest $request, OrderInfo $orderInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderInfo  $orderInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderInfo $orderInfo)
    {
        //
    }
}
