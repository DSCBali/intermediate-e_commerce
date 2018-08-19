<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();

        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = new Category;

        $this->validate($request, [
            'name' => 'required|alpha'
        ]);

        $categorymeta = [
            'name' => $request->name
        ];

        $categoryCreate = $category->create($categorymeta);

        return redirect()->route('admin.category.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|alpha'
        ]);

        $category->name = $request->name;
        $category->update();

        return redirect()->route('admin.category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
