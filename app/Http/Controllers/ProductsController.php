<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller

{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function createproduct()
    {
        return view('products.createproduct');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'picture' => 'required|image|max:1024',
        //     'description' => 'required|string|max:255',
        //     'price' => 'required|integer',
        //     'quantity' => 'required|integer',
        //     'category' => 'required|integer',
        //     'discount' => 'required|integer',
        // ]);
        $path = $request->file('image')->store('images', 'public');
        // dd([
        //     'title' => $request->title,
        //     'picture' => $path,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'quantity' => $request->quantity,
        //     'category' => $request->category,
        //     'discount' => $request->discount,
        // ]);
        try {
            Product::create([
                'title' => $request->title,
                'picture' => $path,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'category' => $request->category,
                'discount' => $request->discount,
            ]);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
        
        return redirect()->route('products')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('show_product', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $path = $request->file('image')->store('images', 'public');
        $request->validate([
            'title' => $request->title,
                'picture' => $path,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'category' => $request->category,
                'discount' => $request->discount,
        ]);

        $product->update($request->all());
        return redirect()->route('products')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('index')->with('success', 'Product deleted successfully.');
    }

   
}


