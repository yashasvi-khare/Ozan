<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;


class ProductsController extends Controller

{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
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
    public function import(Request $request)
    {
        // dd($request->all());
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        // Import the file
        Excel::import(new ProductImport($request->category), $request->file('file'));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Data imported successfully!');
    }

}


