<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "size" => $this->size,
            "guarantee" => $this->guarantee,
            "price" => $this->price,
            "weight" => $this->weight,
            "description" => $this->description,
            "brand" => new BrandResource($this->brand),
            "category" => new CategoryResource($this->category),
            "catalog" => new CatalogResource($this->catalog),
            "storages" => StorageResource::collection($this->storages)
        ];
    }
}
