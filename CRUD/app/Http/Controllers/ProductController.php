<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller

{

    public function index(){
        $products=Product::all();
        return view('index',compact('products'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success, Product deleted successfully');}
    public function edit(Product $product){
        return view('edit', ['product' => $product]);
    }


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

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('index'))->with('success', 'Product Updated Succesffully');

    
    }
}
