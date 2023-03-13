<?php

namespace App\Http\Requests\Slider;

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
            'title' => 'required|string|min:2|max:100',
            // 'slug' => 'required|string|min:2|max:250',
            'image' => 'nullable|image|max:4096|mimes:jpg,jpeg,png,webp',
            // 'sort_number' => 'nullable|min:0|max:119',
            'sort_number' => "required|digits_between:1,1000|regex:/^\d*(\.\d{1,2})?$/"
            // 'status' => 'required|boolean',
        ];
    }
}
