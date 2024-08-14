<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            "product" => new ProductCommentResource($this->product),
            "user" => new UserCommentResource($this->user),
            "rating" => $this->rating,
            "commentary" => $this->commentary,
            "created_at_country" => $this->created_at_country
        ];
    }
}
