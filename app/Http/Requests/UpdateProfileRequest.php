<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'nullable|string|max:255',
            'email'    => 'nullable|email|unique:users,email,' . auth()->id(),
            'phone'    => 'nullable|string|max:20|unique:users,phone,' . auth()->id(),
            'birthdate'=> 'nullable|date',
            'gender'   => 'nullable|in:male,female',
            'password' => 'nullable|string|min:6|confirmed',
        ];
    }
}
