<?php

namespace App\Repositories;

use App\Models\ClubAssesment;
use App\Repositories\BaseRepository;

/**
 * Class ClubAssesmentRepository
 * @package App\Repositories
 * @version December 22, 2020, 11:32 pm UTC
*/

class ClubAssesmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'enjoy_practice_routines',
        'is_participated_in_competitions',
        'is_selected_to_represent',
        'competitions',
        'motivation',
        'achievement',
        'admired_sportsperson',
        'top_athlete_plans',
        'current_team',
        'date_joined_team',
        'favourite_jersey_number',
        'nickname',
        'favourite_sports_team',
        'why_like_team',
        'no_of_teams_played_for',
        'why_leave',
        'can_improve_in_team',
        'is_like_coach_team',
        'positions_play',
        'preferred_foot'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ClubAssesment::class;
    }
}
