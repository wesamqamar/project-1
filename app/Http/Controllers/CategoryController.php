<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function find($id)
    {
        $category = Category::query()->where('id', $id)->first();

        return view('category.show', compact('category'));
    }

    public function store(Request $request)
    {
        Category::query()->create([
            'name' => $request->category_name,
            'status' => 1
        ]);

        return redirect(url('/category'));
    }
}
