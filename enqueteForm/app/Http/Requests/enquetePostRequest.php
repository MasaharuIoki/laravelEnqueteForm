<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class enquetePostRequest extends FormRequest
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
            'name' => 'required|max:20',
            'email' => 'required|email',
            'gender' => 'required|in:1,2',
            'content' => 'required|max:1000'
        ];
    }
 
    public function messages()
    {
        return [
            'name.required' => 'ニックネームを入力してください。',
            'name.max' => 'ニックネームは20文字以内で入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => '正しいメールアドレス形式で入力してください。',
            'gender.required' => '性別を選択してください。',
            'gender.in' => '性別を正しく選択してください。',
            'content.required' => '内容を入力してください。',
            'content.max' => '内容は1000文字以内で入力してください。',
        ];
    }
}
