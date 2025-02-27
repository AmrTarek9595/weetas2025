<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
                'country_code' => 'required|integer|unique:countries,country_code',
                'country_enName' => 'required|string|max:255',
                'country_arName' => 'required|string|max:255',
                'country_enNationality' => 'required|string|max:255',
                'country_arNationality' => 'required|string|max:255',
            ];
    }
}
