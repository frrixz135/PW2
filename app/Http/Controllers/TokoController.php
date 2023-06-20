<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class tokocontroller extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail(){
        return view('toko/detail');
    }
    
    public function about(){
        return view('toko/about');
    }

    public function admin(){
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }

    public function create(){
        return view('toko/create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('product.store')->with('success','Product created successfully');
        
    }
}