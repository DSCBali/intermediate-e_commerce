<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::all();
        return view('product.index', ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'min:3|required',
            'weight' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'description' => 'required|min:5',
            'size' => 'required',
            'color' => 'required'
        ]);

        $idSeller = Auth::user()->id;

        $datas = [
            'seller_id' => $idSeller,
            'category_id' => $request->category,
            'name' => $request->name,
            'weight' => $request->weight,
            'stock' => $request->stock,
            'price' => $request->price,
            'discount' => $request->discount,
            'description' => $request->description,
            'size' => $request->size,
            'color' => $request->color
        ];

        $LastId = Product::create($datas);
        $getLastId = $LastId->id;

        if (!empty($request->file('image'))) {
            $img = $request->file('image')->store('products');

            Product::find($getLastId)->update([
                'image' => $img
            ]);
        }

        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);
        
        return view('product.view', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        
        return view('product.edit', ['data' => $data]);
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
        Product::findOrFail($id)->delete();

        return redirect()->route('admin.product.index');
    }
}
