<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\GD\Driver;
class ImageController extends Controller
{
    public function waterMArk()
    {
        
        return  view('user.water-mark');
    }
    
    public function imageProcc(Request $request)
    {
        if($request->hasFile('image')) {
            $image = Image::make($request->file('image'));

            /**
             * Main Image Upload on Folder Code
             */
            $imageName = time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('images/');
            
            $image->text('This is from ItSolutionStuff.com', 120, 100, function($font) {  
                  $font->size(100);  
                  $font->color('#e1e1e1');  
                  $font->align('center');  
                  $font->valign('bottom');  
                  $font->angle(90);  
            });  
            $image->save($destinationPath.$imageName);
            return back()
                ->with('success','Image Upload successful')
                ->with('imageName',$imageName);
        }
     
        return back();
} 
}