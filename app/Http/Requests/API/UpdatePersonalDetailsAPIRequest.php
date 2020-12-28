<?php

namespace App\Http\Requests\API;

use App\Models\PersonalDetails;
use InfyOm\Generator\Request\APIRequest;

class UpdatePersonalDetailsAPIRequest extends APIRequest
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
            'first_name' => 'nullable|string|max:255',
            'marital_status' => 'nullable|string|max:255',
            'mother_maiden_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'height' => 'nullable|string|max:255',
            'body_weight' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'sm_handle' => 'nullable|string|max:255',
            'highest_education' => 'nullable|string',
            'place_of_birth' => 'nullable|string|max:255',
            'school' => 'nullable|string|max:255',
            'career_preference' => 'nullable|string|max:255',
            'is_still_schooling' => 'nullable|boolean',
            'contact_address' => 'nullable|string',
            'dob' => 'nullable',
            'country_id' => 'nullable|integer',
            'state_of_origin' => 'nullable|integer',
            'zipcode' => 'nullable|integer',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}
