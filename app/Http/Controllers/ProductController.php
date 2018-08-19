<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product.index', compact('products', 'categories'));
    }

    public function create()
    { 
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $product = new Product;

        $this->validate($request, [
            'name' => 'required|string',
            'weight' => 'required|integer',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string',
            'category_id' => 'required'
        ]);

        $productmeta = [
            'name' => $request->name,
            'weight' => $request->weight,
            'stock' => $request->stock,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id
        ];

        $productCreate = $product->create($productmeta);
        
        return redirect()->route('admin.product.index');
    }

    public function show($name)
    {
        $pName = str_replace('-', ' ', $name);
        $product = Product::where('name', $pName)->take(1)->get();
        // dd($product[0]->name);
        $size = Product::where('name', $pName)->orderBy('weight', 'asc')->get();
        return view('product.show', compact('product', 'size'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'weight' => 'required|integer',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string',
            'category_id' => 'required'
        ]);

        $productmeta = [
            'name' => $request->name,
            'weight' => $request->weight,
            'stock' => $request->stock,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id
        ];

        $productCreate = $product->update($productmeta);
        
        return redirect()->route('admin.product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
