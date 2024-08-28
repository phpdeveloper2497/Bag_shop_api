<?php

namespace App\Http\Controllers;

use App\Http\Resources\StorageResource;
use App\Models\Product;
use App\Models\Storage;
use App\Http\Requests\StoreStorageRequest;
use App\Http\Requests\UpdateStorageRequest;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $storage = Storage::all();
        return StorageResource::collection($storage);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStorageRequest $request)
    {
        $product = Product::findOrFail($request->product_id);
        $storages = $product->storages;
        if ($storages->isEmpty()) {
            $storage = $product->storages()->create($request->validated());
            return response()->json($storage, 201);
        }
        foreach ($storages as $storage) {
            if ($storage->color === $request->color) {
                return "Уже есть продукт с этой характеристикой";
            }
        }
        $storage = $product->storages()->create($request->validated());
        return response()->json($storage, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Storage $storage)
    {
        return new StorageResource($storage);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storage $storage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStorageRequest $request, Storage $storage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storage $storage)
    {
        //
    }
}
