<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        return view('home')->with('products', $products);
    }

    function kategori(){
        $fKategori = 'handphone';
        $products = Product::where('kategori',$fKategori)->get(); 
        dd($products);
    }
}
