<?php

namespace App\Http\Controllers;

use App\Entities\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::with('products', 'payment', 'client')->get();
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
        $order = Order::create($request->all());
        $orderWithDetails = Order::find($order->id)->with('client')->get();
        return $orderWithDetails;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return Order::where('id', $order->id)->with('client', 'products', 'payment')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order = Order::findOrFail($order->id);
        $order->update($request->all());

        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order = Order::findOrFail($order->id);
        $order->delete();

        return $order;
    }
}
