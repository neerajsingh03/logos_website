<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use App\Jobs\SendEmailJob;
use App\Models\User;
use App\Events\SendEmail;

class AddToCartController extends Controller
{
    public function addToCartPage(Request $request)
    {
        // $users = User::all();    //Queue Job testing

        // foreach ($users as $user) {

        //     dispatch(new SendEmailJob($user));
        // }
        // dd('email successfully send');   // End Queue Job testing
        if (!Auth()->user()) {
            return redirect('login');
        } else {
            //*********check multiple product at same user Id *************//
            $userIdCheck = Cart::where('user_id', auth()->user()->id)->where('logo_id', $request->id)->exists();
            if (!$userIdCheck) {
                $cart = new Cart;
                $cart->user_id =  auth()->user()->id;
                $cart->logo_id = $request->id;
                $cart->save();
                return redirect('/')->with('msg', 'Add To Cart Successfully');
            } else {
                return redirect('/')->with('msg', ' Sorry This Cart Allready Exists');
            }
        }
    }
    public function userCartitem()
    {
        $user = auth()->user();
        if (auth()->user()) {
            $userCart = Cart::with('logo')->where('user_id', $user->id)->get();
            // dd($userCart);
            $totalCartPrice = 0;

            foreach ($userCart as $item) {
                if ($item->logo) {
                    // Add the Logo price to the total cart price
                    $totalCartPrice += $item->logo->price;
                }
            }
            $counts = Cart::where('user_id', auth()->user()->id)->count();
            return view('user.cart.cart_product', compact('userCart', 'counts', 'totalCartPrice'));
        }
        return redirect('login');
    }
    public function removeCartLogo(Request $request,$id)
    {
        $cart = Cart::find($request->id);
        $cart->delete([$cart->id]);
        return redirect()->back()->with('msg', 'Remove Your Logo');
    }
}
