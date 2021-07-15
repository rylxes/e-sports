<?php

namespace App\Repositories;

use App\Models\Coach;
use App\Repositories\BaseRepository;

/**
 * Class CoachRepository
 * @package App\Repositories
 * @version July 14, 2021, 11:59 pm UTC
*/

class CoachRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'profile_url',
        'qualifications',
        'user_id',
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'gender',
        'coaching_age',
        'coaching_gender',
        'sports',
        'specialization',
        'language',
        'nationality',
        'city_id',
        'employment_type',
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
        return Coach::class;
    }
}
