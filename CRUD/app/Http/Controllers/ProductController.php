<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller

{
<<<<<<< HEAD
    public function index(){
        $products=Product::all();
        return view('index',compact('products'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success, Product deleted successfully');
=======
    public function edit(Product $product){
        return view('edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('index'))->with('success', 'Product Updated Succesffully');

    
>>>>>>> 3d0b842cf1f689c402e525f0a8e29a584fd3dc89
    }
}
