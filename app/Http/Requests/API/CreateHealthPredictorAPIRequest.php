<?php

namespace App\Http\Requests\API;

use App\Models\HealthPredictor;
use InfyOm\Generator\Request\APIRequest;

class CreateHealthPredictorAPIRequest extends APIRequest
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
            'blood_group' => 'nullable|string|max:255',
            'is_hereditary_issue' => 'nullable|boolean',
            'is_current_health_injury' => 'nullable|boolean',
            'is_receiving_treatment' => 'nullable|boolean',
            'is_long_term_injury' => 'nullable|boolean',
            'hereditary_issue' => 'nullable|string|max:255',
            'long_term_injury' => 'nullable|string|max:255',
            'treatment_type' => 'nullable|string|max:255',
            'current_health_injury' => 'nullable|string|max:255',
            'is_personal_health_challenge' => 'nullable|boolean',
            'personal_health_challenge' => 'nullable|string|max:255',
            'injury_seriousness' => 'nullable|string',
            'medical_treatment' => 'nullable|string',
            'injury_location' => 'nullable|string',
            'genotype' => 'nullable|string|max:255',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}
