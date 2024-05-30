<?php

namespace App\Http\Controllers;

use App\Models\PaymentCompany;
use App\Http\Requests\StorePaymentCompanyRequest;
use App\Http\Requests\UpdatePaymentCompanyRequest;

class PaymentCompanyController extends Controller
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
     * @param  \App\Http\Requests\StorePaymentCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentCompany  $paymentCompany
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentCompany $paymentCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentCompany  $paymentCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentCompany $paymentCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentCompanyRequest  $request
     * @param  \App\Models\PaymentCompany  $paymentCompany
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentCompanyRequest $request, PaymentCompany $paymentCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentCompany  $paymentCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentCompany $paymentCompany)
    {
        //
    }
}
