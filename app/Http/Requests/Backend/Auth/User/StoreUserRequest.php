<?php

namespace App\Http\Requests\Backend\Auth\User;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

/**
 * Class StoreUserRequest.
 */
class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email',
                Rule::unique('users')->where('deleted_at', null)],
//            'password' => PasswordRules::register($this->email),
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
            'no_ic' => [
                'required',
                'min:12',
                'max:12',
                Rule::unique('users', 'no_ic')->where('deleted_at', null),

            ],
            'gender' => [
                'required',
                Rule::in(['M', 'F'])
                ],
            'place_of_birth' => 'required|string',
            'roles' => ['required', 'array'],
        ];
    }
}
