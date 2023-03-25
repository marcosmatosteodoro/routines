<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected function index(Request $request)
    {
        //GET 	/categories
        $categories = Category::getCategories();
        return view('categories.index', ['categories' => $categories]);
    }

    protected function create(Request $request)
    {
        //GET /categories/create
        return view('categories.create');
    }

    protected function show(Request $request, int $id)
    {
        //GET /categories/{id}
        $category = Category::getCategory($id);
        return view('categories.show', ['category' => $category]);
    }

    protected function edit(Request $request, $id)
    {
        //GET /categories/{id}/edit
        $category = Category::getCategory($id);
        return view('categories.edit', ['category' => $category]);
    }

    protected function store(Request $request)
    {
        //POST /categories
    }

    protected function update(Request $request)
    {
        //PUT/PATCH /categories/{id}
    }

    protected function destroy(Request $request)
    {
        //DELETE /categories/{id}
    }
}
