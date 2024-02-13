<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function men($id){
        $cate=Category::find($id);
        return view('men',compact('cate'));
    }
    public function women($id){
        $cate=Category::find($id);
        return view('women',compact('cate'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);

        // Create a new product
        Product::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id')
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added successfully!');
    }
    public function wstore(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);

        // Create a new product
        Product::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id')
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added successfully!');
    }
    public function productList(){
        $products=Product::all();
        return view('product',compact('products'));
    }
}
