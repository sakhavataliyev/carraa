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
            'logo' => 'nullable|image|max:4096|mimes:jpg,jpeg,png,webp',
            'favicon' => 'nullable|image|max:4096|mimes:jpg,jpeg,png,webp',
            'title' => 'required|string|min:3|max:250',
            'description' => 'required|string|min:3|max:100',
            'keywords' => 'required|string|min:3|max:250',
            'copyright' => 'required|string|min:3|max:250',
            'analytics' => 'required|string|min:3|max:250',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'logo.nullable' => 'Logo boş ola bilər',
    //         'logo.image' => 'Yalnız şəkil ola bilər',
    //         'logo.max' => 'Logo 4 mb qədər ola bilər',
    //         'logo.mimes' => 'jpg,jpeg,png ola bilər',

    //         'favicon.nullable' => 'Favicon boş ola bilər',
    //         'favicon.image' => 'Yalnız şəkil ola bilər',
    //         'favicon.max' => 'Favicon 4 mb qədər ola bilər',
    //         'favicon.mimes' => 'jpg,jpeg,png ola bilər',

    //         'title.required' => 'Title girin',
    //         'title.string' => 'Title yalnız string ola bilər',
    //         'title.min' => 'Title üçün minimum simvol sayı 3',
    //         'title.max' => 'Title üçün maksimum simvol sayı 100',

    //         'description.required' => 'Description girin',
    //         'description.string' => 'Description yalnız string ola bilər',
    //         'description.min' => 'Description üçün minimum simvol sayı 3',
    //         'description.max' => 'Description üçün maksimum simvol sayı 250',

    //         'keywords.required' => 'Keywords girin',
    //         'keywords.string' => 'Keywords yalnız string ola bilər',
    //         'keywords.min' => 'Keywords üçün minimum simvol sayı 3',
    //         'keywords.max' => 'Keywords üçün maksimum simvol sayı 250',

    //         'copyright.required' => 'Copyright girin',
    //         'copyright.string' => 'Copyright yalnız string ola bilər',
    //         'copyright.min' => 'Copyright üçün minimum simvol sayı 3',
    //         'copyright.max' => 'Copyright üçün maksimum simvol sayı 250',
            
    //         'analytics.required' => 'Analytics məlumatlarını girin',
    //         'analytics.string' => 'Analytics yalnız şəkil ola bilər',
    //         'analytics.min' => 'Analytics üçün minimum simvol sayı 3',
    //         'analytics.max' => 'Analytics üçün maksimum simvol sayı 250',
    //     ];
    // }



}
