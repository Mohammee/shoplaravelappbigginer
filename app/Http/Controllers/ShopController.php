<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $categories =  Category::all();
        $products = Product::with('category')->get();
        return view('shop.index',compact('categories','products'));
    }

}
