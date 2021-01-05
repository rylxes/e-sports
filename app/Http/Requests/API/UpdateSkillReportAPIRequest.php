<?php

namespace App\Http\Requests\API;

use App\Models\SkillReport;
use InfyOm\Generator\Request\APIRequest;

class UpdateSkillReportAPIRequest extends APIRequest
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
            'user_id' => 'required|integer',
            'speed' => 'nullable|string',
            'passing' => 'nullable|string',
            'shooting' => 'nullable|string',
            'dribbling' => 'nullable|string',
            'heading' => 'nullable|string',
            'ball_control' => 'nullable|string',
            'fitness' => 'nullable|string',
            'movement' => 'nullable|string',
            'awareness' => 'nullable|string',
            'decisions' => 'nullable|string',
            'workrate' => 'nullable|string',
            'strength' => 'nullable|string',
            'crossing' => 'nullable|string',
            'finishing' => 'nullable|string',
            'positioning' => 'nullable|string',
            'anticipation' => 'nullable|string',
            'total' => 'nullable|string|max:255',
            'overall_grade' => 'nullable|string',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}
