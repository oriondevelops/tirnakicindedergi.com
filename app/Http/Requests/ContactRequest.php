<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject' => 'required|min:2',
            'message' => 'required|min:2',
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
            'subject.required' => 'lütfen konu belirtiniz.',
            'subject.min' => 'lütfen en az iki karakter giriniz.',
            'message.required' => 'lütfen iletinizi giriniz.',
            'message.min' => 'lütfen en az iki karakter giriniz.',
        ];
    }
}
