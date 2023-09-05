<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('index',compact('products'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success, Product deleted successfully');
    }
}
