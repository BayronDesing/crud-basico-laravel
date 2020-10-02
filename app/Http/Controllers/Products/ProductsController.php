<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Product;

class ProductsController extends Controller
{
    //get
    public function index() {
        $products = Product::all();
        
        return view('products.index',compact('products'));
    }  
    //get
    public function products() {
        $products = Product::all();
        
        return view('products.products',compact('products'));
    }
    //get
    public function create() { 

        return view('products.create');
    } 
    //post
    public function store(Request $_Request) {
        $products=Product::create($_Request->all());
        $_Request->file('product_image')->store('public');
        return redirect()->route('products.products');
    } 
    //get
    public function edit($id) {
        $products=Product::find($id);
        return view('products.edit',compact('products'));
    }  
    //post//put
    public function update(Request $request, $id) {
        $products=Product::find($id)->update($request->all());
        return redirect()->route('products.products');

    }   
    //post//delete  
    public function destroy($id) {
    $products=Product::find($id)->delete();
    return redirect()->route('products.products');
    }   
}
