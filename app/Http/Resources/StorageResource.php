<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StorageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $result = [
            "quantity" => $this->quantity
        ];
        return $this->getAttributes($result);
    }


      public function getAttributes(array $result): array
    {
        $storage_attributes = json_decode($this->attributes,true);
        foreach ($storage_attributes as $stor_attribute) {
            $attribute = Attribute::find($stor_attribute['attribute_id']);
            $value = Value::find($stor_attribute['value_id']);
            $result[$attribute->name] = $value['name'];
        }
        return $result;
    }
}
