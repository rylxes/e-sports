<?php

namespace App\Http\Requests\API;

use App\Models\PsychPredictor;
use InfyOm\Generator\Request\APIRequest;

class UpdatePsychPredictorAPIRequest extends APIRequest
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
            'time_practice_in_week' => 'required|integer',
            'hours_practice_in_week' => 'required|integer',
            'is_parent_in_support' => 'nullable|boolean',
            'is_team_player' => 'nullable|boolean',
            'parent_in_support_reason' => 'nullable|string|max:255',
            'challenges' => 'nullable|string|max:255',
            'greatest_motivation' => 'nullable|string|max:255',
            'strength' => 'nullable|string|max:255',
            'weakness' => 'nullable|string|max:255',
            'can_overcome_challenges' => 'nullable|boolean',
            'time_start_sport' => 'nullable|string',
            'rating_sports' => 'nullable|string',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];;
    }
}
