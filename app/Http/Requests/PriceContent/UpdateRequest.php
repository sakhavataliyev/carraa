<?php

namespace App\Http\Requests\PriceContent;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'content' => 'required|string|min:2|max:100',
            'plan_id' => 'required|string|min:1|max:2500',
            // 'price' => 'required|numeric|min:0|max:100000',
            'sort_number' => 'required|numeric',
            // 'status' => 'required|boolean',
        ];
    }
}
