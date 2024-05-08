<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StocksRequest extends FormRequest
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
            'inventory_id'     => 'required|integer',
            'branch_id'        => 'required|integer',
            'movement_type'    => 'string|nullable|max:255',
            'quantity'         => 'required|integer',
        ];
    }
}
