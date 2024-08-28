<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'userID_white' => 'required|exists:users,id',
            'userID_black' => 'required|exists:users,id',
        ];
    }

       /**
     * Get the custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'userID_white.required' => 'The white user ID is required.',
            'userID_white.exists' => 'The white user ID must be a valid user.',
            'userID_black.required' => 'The black user ID is required.',
            'userID_black.exists' => 'The black user ID must be a valid user.',
        ];
    }
}
