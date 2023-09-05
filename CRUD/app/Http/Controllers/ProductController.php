<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller

{
    public function edit(Product $product){
        return view('edit', ['product' => $product]);
    }

<<<<<<< HEAD
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $product = new Product;
   $product->name=$req->name;
   $product->discription=$req->discription;
   $product->Price=$req->Price;
   $product->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
   
        
    }
=======
    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);
>>>>>>> 3d0b842cf1f689c402e525f0a8e29a584fd3dc89

        return redirect(route('index'))->with('success', 'Product Updated Succesffully');

    
    }
}
