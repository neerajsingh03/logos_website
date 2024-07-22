<?php

namespace App\Http\Controllers\stripe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\user;

class Stripecontroller extends Controller
{
    public function checkOut(Request $request)
    {   
        // $key =  (env('STRIPE_SECRET'));
        // dd($key);
        $user = auth()->user();
        if (auth()->user()) {
            $userCart = Cart::with('logo')->where('user_id', $user->id)->get();
            $totalCartPrice = 0;

            foreach ($userCart as $item) {
                // Add the Logo price to the total cart price
                if ($item->logo) {
                    $totalCartPrice += $item->logo->price;
                }
            }
            $counts = Cart::where('user_id', auth()->user()->id)->count();
            return view('stripe.check_out', compact('userCart', 'counts', 'totalCartPrice'));
        }
        return redirect('login');
    }
    public function stripePost(Request $request)
    {
        $user = auth()->user();

        $userCart = Cart::with('logo')->where('user_id', $user->id)->get();
        $totalCartPrice = 0;

        foreach ($userCart as $item) {       //****************/Add the Logo price to the total cart price **********//
            if ($item->logo) {
                $totalCartPrice += $item->logo->price;
            }
        }
        // \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe::setApiKey(env('STRIPE_SECRET'));
        // Create a new Stripe customer.
        $customer = \Stripe\Customer::create([
            'name' => $request->name,
            'source' => $request->input('stripeToken'),
        ]);

        $stripeCustomerId = $customer->id;
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $user->update(['stripe_customer_id' => $stripeCustomerId]);

        // Create a new Stripe charge.
        $intent = PaymentIntent::create([
            'amount' =>  $totalCartPrice * 100, // amount in cents
            'currency' => 'inr',
            'payment_method_types' => ['card'],
        ]);
        return redirect('/')->with('msg', 'Payment successful!');
    }
}
