<?php

namespace App\Repositories;

use App\Models\OrtopedicAndSurgeon;
use App\Repositories\BaseRepository;

/**
 * Class OrtopedicAndSurgeonRepository
 * @package App\Repositories
 * @version July 25, 2021, 1:27 am UTC
*/

class OrtopedicAndSurgeonRepository extends BaseRepository
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
        return OrtopedicAndSurgeon::class;
    }
}
