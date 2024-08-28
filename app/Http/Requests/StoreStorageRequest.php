<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStorageRequest extends FormRequest
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
            "product_id" => ['required', 'exists:products,id'],
            'color' => ['required','string','max:255'],
            'material' => ['required','string','max:255'],
            'quantity' => ['required','integer'],
            'price' => ['required','numeric']
        ];
    }

    public function messages()
    {
        return [
//            'code.unique' => 'код продукта должен быть уникальным.',
        ];
    }
}
