<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ZipCodeRule implements Rule
{
    /**
     * バリデーションの成功を判定
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[0-9]{3}-[0-9]{4}$/', $value);
    }

    /**
     * バリデーションエラーメッセージの取得
     *
     * @return string
     */
    public function message()
    {
       // return 'validation.zipcode';
       //翻訳ファイルからメッセージを取得する場合
        return '郵便番号の形式で入力してください';

    }
}
