<?php

namespace App\Http\Controllers\designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Logo;
use Illuminate\Support\Str;

class LogoController extends Controller
{
    public function addlogoPage()
    {
        $category = Categories::all();
        return view('designer.logo.add_logo', compact('category'));
    }
    public function addLogoProcess(Request $request)
    {


        // $validate =   $request->validate([
        //     'name' => 'required|',
        //     'category' => 'required',
        //     'slug' => 'required',
        //     'price' => 'required',
        //     'stock' => 'required',
        //     'logo_image' => 'required',
        //     'description' => 'required',
        // ]);
        $logo = new Logo;
        $logo->designer_id = auth()->user()->id;
        $logo->name = $request->name;

        $logo->slug = Str::slug($request->name);
        $logo->category_id = $request->category;
        $logo->price     = $request->price;
        $logo->stock  = $request->stock;
        $logo->description = $request->description;
        $file = $request->file('logo_image');   // image saving
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('image', $filename);
        //  $path = $file->move('image-upload', $filename);
        // if (!file_exists($path)) {

        //     mkdir($path, 0755, true);
        // }
        $image = $filename;
        $logo->logo_image = $image;

        $logo->save();           //************* Save Logo  **************//
        return back()->with('success', 'Logo Added Successfully');
    }
}
