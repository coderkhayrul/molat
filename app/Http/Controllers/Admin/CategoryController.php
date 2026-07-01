<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all categories pagination with count of products in each category
        $categories = Category::paginate(1);
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->slug = $request->input('description') ? Str::slug($request->input('name')) : null;
        $category->image = $request->hasFile('image') ? saveImage($request->file('image'), '/uploads/categories/') : null;
        $category->banner_image = $request->hasFile('banner_image') ? saveImage($request->file('banner_image'), '/uploads/categories/banner/') : null;
        $category->save();
        return back()->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        // Delete associated images if they exist
        if ($category->image) {
            deleteImage($category->image);
        }
        if ($category->banner_image) {
            deleteImage($category->banner_image);
        }

        $category->delete();

        return back()->with('success', 'Category deleted successfully.');
    }
}
