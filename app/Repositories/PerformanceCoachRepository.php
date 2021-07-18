<?php

namespace App\Repositories;

use App\Models\PerformanceCoach;
use App\Repositories\BaseRepository;

/**
 * Class PerformanceCoachRepository
 * @package App\Repositories
 * @version July 18, 2021, 3:30 pm UTC
*/

class PerformanceCoachRepository extends BaseRepository
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
        'language',
        'nationality',
        'city_id',
        'user_id',
        'email',
        'employment_type',
        'qualifications'
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
        return PerformanceCoach::class;
    }
}
