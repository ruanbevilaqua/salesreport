<?php

namespace App\Http\Controllers;

use App\Entities\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Payment::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Payment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return Payment::where('id', $payment->id)->with('order')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment = Payment::findOrFail($payment->id);
        $payment->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment = Payment::findOrFail($payment->id);
        $payment->delete();

        return $payment;
    }
}
