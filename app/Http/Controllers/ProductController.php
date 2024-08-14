<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('storages')->paginate(15);
        return ProductResource::collection($products);
    }


    public function store(StoreProductRequest $request)
    {
        $product = Product::create([
            "brand_id" => $request->brand_id,
            "catalog_id" => $request->catalog_id,
            "name" => $request->name,
            "size" => $request->size,
            "guarantee" => $request->guarantee,
            "price" => $request->price,
            "weight" => $request->weight
        ]);
        return response()->json(new ProductResource($product));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
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
