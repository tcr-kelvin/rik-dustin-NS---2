<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStorePost;
use App\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('layout.adminhome', compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsStorePost $request)
    {
        //
        $validated = $request->validated();

        $product = new Product();
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->imagepath = $request['imagepath'];
        $product->price = $request['price'];
        $product->save();

        return redirect()->action('ProductsController@index')
            ->with('status', 'Product toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     * products/6
     */
    public function show(Product $product)
    {
        //
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsStorePost $request, Product $product)
    {
        //
        $validated = $request->validated();

        //$product = new Product();
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->imagepath = $request['imagepath'];
        $product->price = $request['price'];
        $product->save();

        return redirect()->action('ProductsController@index')
            ->with('status', 'Product gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->action('ProductsController@index')
            ->with('status', 'Product verwijderd');
    }
}