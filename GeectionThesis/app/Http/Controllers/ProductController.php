<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index(){
        $nama = "bawang";
        $products = Product::where('id','1')->where('nama',$nama)->get(); 
        dd($products);
        return view('home')->with('products', $products);
    }
}
