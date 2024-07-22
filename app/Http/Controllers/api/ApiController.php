<?php

namespace App\Http\Controllers\api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    public function check_api()
    {
        $response = Http::get('https://fakestoreapi.com/products');

        $data = $response->json();
        return view('api.test-api',compact('data'));
    
    }

}
