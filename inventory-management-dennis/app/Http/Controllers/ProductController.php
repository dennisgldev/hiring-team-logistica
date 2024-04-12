<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductHistory;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return Inertia::render('showProducts', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('createProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'hasStock' => 'required'
        ]);

        $product = Product::create($request->all());        

        ProductHistory::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'stock' => $product->stock,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return Redirect::route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return Inertia::render('editProduct', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $user_id = auth()->id();
        $old_stock = $product->stock;
        $product->update($request->all());
        $new_stock = $product->stock;

        if ($old_stock !== $new_stock) {
            ProductHistory::create([
                'product_id' => $product->id,
                'user_id' => $user_id,
                'stock' => $new_stock,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return Redirect::route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('products.index');
    }

    public function history(Product $product)
{
    $history = $product->productHistory()->with('user')
                 ->orderBy('created_at', 'desc')
                 ->get();

    return Inertia::render('productHistory', [
        'history' => $history,
    ]);
}

}
