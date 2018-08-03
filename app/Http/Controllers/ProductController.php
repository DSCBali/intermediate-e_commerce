<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = new Product;

        $productList = $product->with('category')->all();

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $this->validate($request, [
            'name' => 'required|alpha',
            'weight' => 'required|numeric',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'required',
            'description' => 'required',
            'category' => 'required|numeric'
        ]);

        $productmeta = [
            'name' => $request->name,
            'weight' => $request->weight,
            'stock' => $request->stock,
            'price' => $request->price,
            'discount' => $request->discount / 100,
            'description' => $request->description,
            'seller_id' => Auth::id(),
            'category_id' => $request->category
        ];

        $productCreate = $product->fill($productmeta);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
