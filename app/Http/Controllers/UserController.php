<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$products = Product::groupBy('name')->get();
        return view('index', compact('products'));
    }

    public function category(Category $category)
    {
        dd($category);
        $categories = Category::get();
        return view('category', compact('categories'));
    }
}
