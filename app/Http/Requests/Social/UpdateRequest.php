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
            'facebook' => 'required|string|min:3|max:250',
            'twitter' => 'required|string|min:3|max:250',
            'instagram' => 'required|string|min:3|max:250',
            'tiktok' => 'required|string|min:3|max:250',
            'github' => 'required|string|min:3|max:250',
            'linkedin' => 'required|string|min:3|max:250',
            'pinterest' => 'required|string|min:3|max:250',
            'youtube' => 'required|string|min:3|max:250',
            'whatsapp' => 'required|string|min:3|max:250',
            'address' => 'required|string|min:3|max:250',
            'phone' => 'required|string|min:7|max:20',
            'email' => 'required|email|min:3|max:50',
            'latitude' => 'required|string|min:3|max:250',
            'longitude' => 'required|string|min:3|max:250',

        ];
    }

    // public function messages(): array
    // {
    //     return [

    //     ];
    // }



}