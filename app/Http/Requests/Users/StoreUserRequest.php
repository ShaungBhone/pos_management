<?php

namespace App\Http\Requests\Users;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'email' => 'required|string|max:50|unique:users,email,' . $this->user()->id,
            'user_type' => 'required|integer|max:10',
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}
