<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Categories',
            "active" => "categories",
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('posts', [
            'title' => "Post By Category: $category->name",
            "active" => "categories",
            'posts' => $category->posts->load('category', 'author'),
        ]);
    }
}
