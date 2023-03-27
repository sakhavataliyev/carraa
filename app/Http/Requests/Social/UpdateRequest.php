<?php

namespace App\Http\Requests\Social;

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
            'facebook' => 'string|nullable|min:0|max:250',
            'twitter' => 'string|nullable|min:0|max:250',
            'instagram' => 'string|nullable|min:0|max:250',
            'tiktok' => 'string|nullable|min:0|max:250',
            'github' => 'string|nullable|min:0|max:250',
            'linkedin' => 'string|nullable|min:0|max:250',
            'pinterest' => 'string|nullable|min:0|max:250',
            'youtube' => 'string|nullable|min:0|max:250',
            'whatsapp' => 'string|nullable|min:0|max:250',
            'address' => 'string|nullable|min:0|max:250',
            'phone' => 'string|nullable|min:0|max:20',
            'email' => 'email|nullable|min:0|max:50',
            'latitude' => 'string|nullable|min:0|max:250',
            'longitude' => 'string|nullable|min:0|max:250',

        ];
    }



}