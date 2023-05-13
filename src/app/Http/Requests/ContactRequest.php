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
     * @return array
     */
    public function rules()
    {
        return [
            'lastname' => ['required', 'string', 'max:50'],
            'firstname' => ['required', 'string', 'max:50'],
            'gender' => ['required'],
            'email' => ['required', 'email', 'max:255'],
            'postcode' => ['required', 'string','regex:/\d{3}-\d{4}/'],
            'address' => ['required', 'string', 'max:255'],
            'building_name' => ['min:0','max:255'],
            'opinion' => ['required', 'string','max:1000']

        ];
    }

    public function messages()
    {
        return [
            'lastname.required' => '苗字(姓)を入力してください',
            'lastname.max:50' => '50文字以下で入力してください',
            'firstname.required' => '名前(名)を入力してください',
            'firstname.max:50' => '50文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => '郵便番号をxxx-xxxxの形式で入力してください',
            'address.required' => '住所を入力してください',
            'building_name' => '文字数が多すぎます。255文字以下で入力してください',
            'opinion.required' => 'ご意見を入力してください'
    ];
    }

        // Override
}