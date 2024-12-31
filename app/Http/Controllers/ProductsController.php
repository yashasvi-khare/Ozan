<?php

namespace App\Http\Controllers;

use App\Imports\CafeProductImport;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;


class ProductsController extends Controller

{
    public function index()
    {
        $products = MarketProduct::all();
        return view('products.index', compact('products'));
    }

    public function show(MarketProduct $product)
    {
        return view('show_product', compact('product'));
    }

    public function edit(MarketProduct $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, MarketProduct $product)
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

    public function destroy(MarketProduct $product)
    {
        $product->delete();
        return redirect()->route('index')->with('success', 'MarketProduct deleted successfully.');
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
    public function cafeimport(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new CafeProductImport($request->category), $request->file('file'));
        // Redirect back with success message
        return redirect()->back()->with('success', 'Data imported successfully!');
    }
  

}


