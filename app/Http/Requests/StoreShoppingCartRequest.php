<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShoppingCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'items' => 'required|array',
            'items.*.id' => 'required|exists:items,id',
            'items.*.quantity' => 'required|integer|min:1',
            'total_items' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ];
    }
}
