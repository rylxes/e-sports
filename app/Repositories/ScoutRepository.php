<?php

namespace App\Repositories;

use App\Models\Scout;
use App\Repositories\BaseRepository;

/**
 * Class ScoutRepository
 * @package App\Repositories
 * @version July 18, 2021, 3:29 pm UTC
*/

class ScoutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'profile_url',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'gender',
        'scouting_age',
        'scouting_gender',
        'sports',
        'specialization',
        'language',
        'nationality',
        'city_id',
        'user_id',
        'email',
        'employment_type',
        'scouting_level',
        'qualifications',
        'team_club'
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
        return Scout::class;
    }
}
