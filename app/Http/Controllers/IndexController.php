<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\banner;
use App\Product;

class IndexController extends Controller
{
    public function index()
    {   $banners=banner::get();
    	$products=Product::get();
    	//print_r($products);
        return view('front.index',compact('banners','products'));
    }
}
