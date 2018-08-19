<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::all();

        return view('index', ['datas' => $datas]);
    }

    public function show($id)
    {
        $data = Product::find($id);

        return view('product', ['data' => $data]);
    }
}
