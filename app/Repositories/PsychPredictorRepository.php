<?php

namespace App\Repositories;

use App\Models\PsychPredictor;
use App\Repositories\BaseRepository;

/**
 * Class PsychPredictorRepository
 * @package App\Repositories
 * @version December 23, 2020, 11:08 am UTC
*/

class PsychPredictorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'time_practice_in_week',
        'hours_practice_in_week',
        'is_parent_in_support',
        'is_team_player',
        'parent_in_support_reason',
        'challenges',
        'greatest_motivation',
        'strength',
        'weakness',
        'can_overcome_challenges',
        'time_start_sport',
        'rating_sports'
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
        return PsychPredictor::class;
    }
}
