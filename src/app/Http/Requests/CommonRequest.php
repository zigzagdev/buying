<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Request;

class CommonRequest extends FormRequest
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
    public function attributes()
    {
        return [
            'address' => 'メールアドレス',
            'password' => 'パスワード',
            'nickName' => '名前(ニックネーム)',
            'age' => '年齢',
            'sex' => '性別',
            'prefecture' => '都道府県',
            'title' => 'タイトル',
            'content' => '投稿内容',
            'mountainRate' => 'レーティング',
            'mountainName' => '山の名前',
            'name' => 'コメント投稿者名',
            'newsTitle' => 'ニュースタイトル',
            'newsContent' => 'ニュース投稿'
        ];
    }

    public function errorMessages()
    {
        return [
            'required' => ':attributeは入力必須となっております。',
            'string' => ':attributeが不正です。',
            'integer' => ':attributeが不正です。',
            'date' => ':attributeには日付のみ入力可能です。',
            'email' => 'メールアドレスの形式が正しくありません。',
            'unique' => ':attributeは既に使用されています。',
            'min' => ':attributeの値は%d文字以上の文字数が必要です。',
            'max' => ':attributeの値は%d文字以下の文字数でお願いします。',
            'between' => ':attributeは%dから%dの間の数字で入力してください。',
            'regex' => ':attributeは半角英数字のみ有効となっております。'
        ];
    }

    protected function failedValidation(validator $validator)
    {
        $errors = $validator->errors()->toArray();

        $response = [
            'statusCode'  => Request::Bad_Request,
            'statusMessage' => reset($errors)[0]
        ];
        throw new HttpResponseException(
            response()->json($response, Request::Bad_Request)
        );
    }
}
