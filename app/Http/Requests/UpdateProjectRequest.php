<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name_en'       => 'required|string|max:255',
            'name_ar'       => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'location'      => 'nullable|string',
            'built_year'    => 'nullable|integer',
            'country_id'    => 'nullable|exists:countries,id',
            'city_id'       => 'nullable|exists:cities,id',
        ];
    }
}
