<?php

namespace App\Http\Controllers;

use App\Models\ShippingCompany;
use App\Http\Requests\StoreShippingCompanyRequest;
use App\Http\Requests\UpdateShippingCompanyRequest;

class ShippingCompanyController extends Controller
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
     * @param  \App\Http\Requests\StoreShippingCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShippingCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingCompany  $shippingCompany
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingCompany $shippingCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingCompany  $shippingCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingCompany $shippingCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShippingCompanyRequest  $request
     * @param  \App\Models\ShippingCompany  $shippingCompany
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShippingCompanyRequest $request, ShippingCompany $shippingCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingCompany  $shippingCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingCompany $shippingCompany)
    {
        //
    }
}
