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
        return view('kategori')->with('kategori',$products);
    
    }
       public function store(Request $request)
    {
    	$this->validate($request,[
           'nameB' => 'required',
           'kategori' => 'required',
           'harga' => 'required|numeric',
           'description' => 'required',
           'image' => 'required|image'
        ]);

        if($request->hasfile('image'))
         {
            $file = $request->file('image');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $product= new Product();
        $product->nama=$request->get('nameB');
        $product->start_price=$request->get('harga');
        $product->description=$request->get('description');
        $product->kategori=$request->get('kategori');
        $product->image=$name;
        $product->save();
        
        return redirect('/')->with('success', 'Information has been added');
    }
}