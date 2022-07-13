<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
     * Правила валидации запроса изменение/создания новости
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => 'int',
            'name' => 'string|required',
            'text' => 'string|required|max:255'
        ];
    }
}
