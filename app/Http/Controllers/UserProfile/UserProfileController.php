<?php

namespace App\Http\Controllers\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
class UserProfileController extends Controller
{
    //


    public function userProfile()
    {
        // dd('test user profile url');
        $users = User::where('role','user')->get();
        // $users = User::all();
        $counts = Cart::where('user_id', auth()->user()->id)->count();
        return view('user.user_profile',compact('counts','users'));
    }
    public function editProfile(Request $request,$id){
        // dd($request->id);
        $id = $request->id;
        $userFind = User::find($id);
        dd($userFind);

    }
}
