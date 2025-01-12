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
            'last-name' => ['required', 'string', 'max:20'],
            'first-name' => ['required', 'string', 'max:20'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:50'],
            'tel-1' => ['required', 'numeric'],
            'tel-2' => ['required', 'numeric'],
            'tel-3' => ['required', 'numeric'],
            'address' => ['required', 'string', 'max:100'],
            'categories' => ['required'],
            'detail' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last-name.required' =>'性を入力してください',
            'first-name.required' =>'名を入力してください',
            'gender.required' =>'性別を選択してください',
            'email.required' =>'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel-1.required' =>'電話番号を入力してください',
            'tel-1.numeric' =>'電話番号は5桁までの数字で入力してください',
            'tel-2.required' =>'電話番号を入力してください',
            'tel-2.numeric' =>'電話番号は5桁までの数字で入力してください',
            'tel-3.required' =>'電話番号を入力してください',
            'tel-3.numeric' =>'電話番号は5桁までの数字で入力してください',
            'address.required' =>'住所を入力してください',
            'categories.required' =>'お問い合わせの種類を選択してください',
            'detail.required' =>'お問い合わせ内容を入力してください',
            'detail.max' =>'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
