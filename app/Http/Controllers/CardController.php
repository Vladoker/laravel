<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('shop', compact('products'));
    }

    public function shopDetalis($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
      
        return view('shop_details', compact('product'));
    }


}
