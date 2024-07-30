<?php

namespace App\Http\Controllers\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //


    public function userProfile()
    {
        dd('test user profile url');
        // $users = User::where('role','user')->get();
    }
}
