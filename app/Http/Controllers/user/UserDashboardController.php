<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Cart;
use App\Models\Categories;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\ProductReview;
use Carbon\Carbon;
use App\Models\OtpVerification;
use Exception;

class UserDashboardController extends Controller
{
    public function index()
    {
        // $users = User::where('created_at', '>=', now()->subDays(30))->get();
        // dd($users);
        // // return response()->json($users);
        if (auth()->check()) {
            if (auth()->user()->role === "admin") {
                return redirect()->back();
            } elseif (auth()->user()->role === "designer") {
                return redirect()->back();
            }
        }
        $logos = Logo::where('is_approved', true)->get();
        if (auth()->user()) {

            $counts = Cart::where('user_id', auth()->user()->id)->count();
            return view('user.dashboard.index', compact('logos', 'counts',));
        }
        return view('user.dashboard.index', compact('logos'));
    }
    public function logoDetails(Request $request)
    {
        $slug = $request->slug;
        $logo = Logo::where('slug', $slug)->get();
        // $id = $logo->id;
        // $reviews = ProductReview::where('product_id',$id)->get();
        $reviews = ProductReview::all();
        // $review  = 0;
        // foreach($reviews as $rev){
        //     $review += $rev->rate;
        // }
        // dd($review);
        if (auth()->user()) {
            $counts = Cart::where('user_id', auth()->user()->id)->count();
            return view('user.logo.logo_details', compact('logo', 'counts', 'reviews'));
        }
        return view('user.logo.logo_details', compact('logo', 'reviews'));
    }
    public function category()
    {
        $categories = Categories::all();
        if (auth()->user()) {
            $counts = Cart::where('user_id', auth()->user()->id)->count();
            return view('user.category.all_category', compact('categories', 'counts'));
        }
        return view('user.category.all_category', compact('categories'));
    }
    public function singleCategoryLogo(Request $request)
    {
        $category = Logo::with('categories')->where('category_id', $request->id)->get();
        if (auth()->user()) {
            $counts = Cart::where('user_id', auth()->user()->id)->count();
            return view('user.category.single_logo_category', compact('category', 'counts'));
        }
        return view('user.category.single_logo_category', compact('category'));
    }
    public function searchLogo(Request $request)
    {
        // dd($request->all());
        if (Auth()->user()) {
            $search = $request->search;
            $results = Logo::where('name', 'like', "%$search%")->get();
            $counts = Cart::where('user_id', auth()->user()->id)->count();
            // return response()->json($results);

            // $data = json_decode($results);
            // dd($data);
            return view('user.dashboard.search_logo', compact('results', 'counts'));
        }
        $search = $request->input('search');
        $results = Logo::where('name', 'like', "%$search%")->get();
        // return response()->json($results);

        return view('user.dashboard.search_logo', compact('results'));
    }
    public function switchLang($locale)
    {
        App::setLocale($locale);
        // session()->put('locale', $locale);
        $logos = Logo::where('is_approved', true)->get();
        if (auth()->user()) {
            $counts = Cart::where('user_id', auth()->user()->id)->count();
            return view('user.dashboard.index', compact('logos', 'counts',));
        }
        return view('user.dashboard.index', compact('logos'));
    }
    public function addReview(Request $request)
    {
        try {
            $review = new ProductReview();
            $review->rate = $request->rate;
            $review->review = $request->review;
            $review->product_id = $request->product_id;
            $review->save();
            return redirect()->back()->with('success', 'Your review has been added successfully.');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Failed to add review. Please try again later.');
        }
    }
    public function emailVerify(Request $request)
    {
        // try{
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
        $otp =  rand(123456, 999999);

        OtpVerification::create([
            'user_id' => $user->id,
            'otp' => $otp,
            'expire_at' => Carbon::now()->addMinutes(5)
        ]);
        return response()->json(['success' => 'Your OTP has been sent to your email address'], 200);
        // }
        // catch (Exception $e) {
        //     // Handle exceptions
        //     return response()->json(['error' => 'Something went wrong. Please try again later.'], 500);
        // }
    }
}
