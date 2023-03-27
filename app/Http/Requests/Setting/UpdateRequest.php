<?php

namespace App\Http\Requests\Setting;

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
            'logo' => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp',
            'favicon' => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp,ico',
            'title' => 'required|string|min:3|max:250',
            'description' => 'required|string|min:3|max:100',
            'keywords' => 'required|string|min:3|max:250',
            'copyright' => 'required|string|min:3|max:250',
            'analytics' => 'nullable|string|min:3|max:250',
        ];
    }



}
