<?php

namespace App\Http\Controllers;

use App\Entities\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $product = new Product;
        
        $fields = $product->getFillable();
        
        return view('product.create', ['fields' => $fields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        
        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return redirect()->action('ProductController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product = Product::findOrFail($product->id);
        $product->update($request->all());

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $product->delete();

        return $product;
    }
}
