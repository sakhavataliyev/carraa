<?php

namespace App\Http\Requests\Process;

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
            'title' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:250',
            // 'sort_number' => 'required|number',
            // 'status' => 'required|boolean',
        ];
    }
}
