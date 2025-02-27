<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'referance_id' => 'required|string|unique:properties,referance_id',
            'type' => 'required|string',
            'rentOrSale' => 'required|string',
            'title_en' => 'required|string',
            'title_ar' => 'required|string',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'price' => 'required|numeric',
            'area' => 'nullable|string',
            'bedroom' => 'required|integer',
            'bathroom' => 'required|integer',
            'category_en' => 'nullable|string',
            'category_ar' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            'location_id' => 'required|exists:locations,id',
            'project_id' => 'required|exists:projects,id',
            'google_maps' => 'nullable|string',
        ];
    }
}
