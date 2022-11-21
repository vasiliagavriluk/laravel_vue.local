<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return Auth::check();
        return true;
    }

    /**
     * Получить массив правил валидации, которые будут применены к запросу.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'                   => 'required|email',
            'name'                    => 'required|min:5',
            'password'                => 'required|min:3|confirmed',
            'password_confirmation'   => 'required|min:3',
        ];
    }
}
