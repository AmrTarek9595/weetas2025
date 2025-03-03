<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
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
                'referance_id'   => 'sometimes|string|max:255',
                'type'           => 'sometimes|string|in:apartment,villa,house,land',
                'rentOrSale'     => 'sometimes|string|in:rent,sale',
                'title_en'       => 'sometimes|string|max:255',
                'title_ar'       => 'sometimes|string|max:255',
                'description_en' => 'nullable|string',
                'description_ar' => 'nullable|string',
                'price'          => 'sometimes|numeric|min:0',
                'area'           => 'sometimes|numeric|min:0',
                'bedroom'        => 'sometimes|integer|min:0',
                'bathroom'       => 'sometimes|integer|min:0',
                'category_en'    => 'sometimes|string|max:255',
                'category_ar'    => 'sometimes|string|max:255',
                'user_id'        => 'nullable|exists:users,id',
                'location_id'    => 'nullable|exists:locations,id',
                'project_id'     => 'nullable|exists:projects,id',
                'google_maps'=> 'nullable|string|max:255'
        ];

    }
}
