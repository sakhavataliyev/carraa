<?php

namespace App\Http\Requests\PriceContent;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'plan_id' => 'required',
            'content' => 'required|string|min:2|max:100',
            'sort_number' => 'required|numeric',
            // 'status' => 'required|boolean',
        ];
    }
}
