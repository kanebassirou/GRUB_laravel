<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product = Product::orderby('id','desc')->paginate(12);
        return view('product.index',compact('product'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $catagory = Catagory::all();
        
        return view('product.create',compact('catagory'));

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        
        Product::create($request->validated());
        return redirect()->route('product.index')
        ->with('success', "Produit ajoutée avec succès");

            
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('product.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
