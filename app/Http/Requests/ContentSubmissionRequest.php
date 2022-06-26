<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentSubmissionRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'description' => 'nullable',
            'category' => 'required',
            'file' => 'required|max:10240|mimes:doc,docx,jpg,png',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'ad - soyad alanı gereklidir.',
            'email.required' => 'e-posta alanı gereklidir.',
            'email.email' => 'lütfen geçerli bir e-posta giriniz.',
            'subject.required' => 'lütfen bir başlık giriniz.',
            'category.required' => 'kategori alanı gereklidir.',
            'file.required' => 'lütfen bir dosya yükleyiniz.',
            'file.max' => "izin verilen dosya boyutunu aştınız.",
            'file.mimes' => "dosya türü doc/docx, jpg veya png olmalıdır.",
        ];
    }
}
