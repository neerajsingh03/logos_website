<?php

namespace App\Http\Controllers\favorite;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class FavoriteLogoController extends Controller
{
    public function addToFavorite(Request $request)
    {
        if (!Auth()->user()) {
            return redirect('login');
        } else {
            //*********check multiple product at same user Id *************//
            $userIdCheck = Favorite::where([['user_id', auth()->user()->id],['logo_id', $request->id]])->exists();
            if (!$userIdCheck) {
                $cart = new Favorite;
                $cart->user_id =  auth()->user()->id;
                $cart->logo_id = $request->id;
                $cart->save();
                return redirect('/')->with('msg',  'save your Favorite Logo');
            } else {
                return redirect('/')->with('msg', ' Sorry This Logo Allready Exists');
            }
        }
    }
    public function userFavoriteLogo()
    {
        if(!auth()->user())
        {
            return redirect('login');
        }
        $user = auth()->user();
        $counts = Favorite::where('user_id', auth()->user()->id)->count();
        $userCart = Favorite::with('logo')->where('user_id', $user->id)->get();
        $totalCartPrice = 0;
        foreach ($userCart as $item) {
            // Add the Logo price to the total cart price
            $totalCartPrice += $item->logo->price;
        }
        $favoriteLogos = Favorite::with('logo')->where('user_id', $user->id)->get();
        return view('user.favorite.favorite_logos', compact('counts', 'favoriteLogos', 'totalCartPrice'));
    }
}
