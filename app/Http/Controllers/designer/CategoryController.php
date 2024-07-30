<?php

namespace App\Http\Controllers\designer;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function categoriesPage()
    {
        // changes
        $parent_category = Categories::all();

        return view('designer.categories.add_categories', compact('parent_category'));
    }
    public function addCategoriesProcess(Request $request)
    {

        $request->validate([
            'category_name' => 'required',
            'cat_image' => 'required',
        ]);
        $category = new Categories();
        $category->designer_id = auth()->user()->id;

        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->category_name);

        $file = $request->file('cat_image');   // image saving

        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;

        $file->move('image', $filename);
        $image = $filename;

        $category->cat_image = $image;
        if ($request->parent_category) {
            $category->parent_category_id = $request->parent_category;
        }

        $category->save();           //************* Save Categories  **************//
        return back()->with('success', 'Category Added Successfully');
    }
}