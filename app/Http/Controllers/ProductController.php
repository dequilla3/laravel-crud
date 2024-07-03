<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        Product::create($data);
        return redirect()->route('product.index')->with('message', 'Successfully created new Product!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function saveUpdate(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);
        $product->update($data);

        return redirect()->route('product.index')->with('message', 'Successfully updated Product!');
    }

    public function delete(Product $product)
    {
        $product->delete($product);
        return redirect()->route('product.index')->with('message', 'Successfully deleted Product!');
    }
}
