<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
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
            //
                'country_code' => 'nullable|integer|unique:countries,country_code',
                'country_enName' => 'nullable|string|max:255',
                'country_arName' => 'nullable|string|max:255',
                'country_enNationality' => 'nullable|string|max:255',
                'country_arNationality' => 'nullable|string|max:255',
        ];
    }
}
