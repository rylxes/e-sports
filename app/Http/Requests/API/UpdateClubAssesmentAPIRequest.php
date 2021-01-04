<?php

namespace App\Http\Requests\API;

use App\Models\ClubAssesment;
use InfyOm\Generator\Request\APIRequest;

class UpdateClubAssesmentAPIRequest extends APIRequest
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
            'enjoy_practice_routines' => 'nullable|boolean',
            'is_participated_in_competitions' => 'nullable|boolean',
            'is_selected_to_represent' => 'nullable|boolean',
            'competitions' => 'nullable|string',
            'motivation' => 'nullable|string',
            'achievement' => 'nullable|string',
            'admired_sportsperson' => 'nullable|string|max:255',
            'top_athlete_plans' => 'nullable|string',
            'current_team' => 'nullable|string|max:255',
            'date_joined_team' => 'nullable',
            'favourite_jersey_number' => 'nullable|string|max:255',
            'nickname' => 'nullable|string|max:255',
            'favourite_sports_team' => 'nullable|string|max:255',
            'why_like_team' => 'nullable|string|max:255',
            'no_of_teams_played_for' => 'nullable|integer',
            'why_leave' => 'nullable|string|max:255',
            'can_improve_in_team' => 'nullable|boolean',
            'is_like_coach_team' => 'nullable|boolean',
            'positions_play' => 'nullable|string',
            'preferred_foot' => 'nullable|string',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}
