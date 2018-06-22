<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductsStorePost;




class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
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
        return view('product.show', compact('product'));
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
        return view('product.edit', compact('product'));
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
