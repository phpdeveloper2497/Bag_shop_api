<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "brand_id" => [
                'required',
                'exists:brands,id'
            ],
            "catalog_id" =>[
                'required',
                'exists:catalogs,id'
            ],
            "category_id" =>[
                'required',
                'exists:categories,id'
            ],
            "name" => ['required', 'string'],
            "size" => ['required','numeric'],
            "guarantee" => ['required', 'numeric'],
            "weight" => ['required','numeric'],
            "description" => ['required', 'string'],
        ];
    }
}
