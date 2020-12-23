<?php

namespace App\Repositories;

use App\Models\PersonalDetails;
use App\Repositories\BaseRepository;

/**
 * Class PersonalDetailsRepository
 * @package App\Repositories
 * @version December 23, 2020, 11:05 am UTC
*/

class PersonalDetailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'first_name',
        'marital_status',
        'mother_maiden_name',
        'last_name',
        'height',
        'body_weight',
        'phone',
        'sm_handle',
        'highest_education',
        'place_of_birth',
        'school',
        'career_preference',
        'is_still_schooling',
        'contact_address',
        'dob',
        'country_id',
        'state_of_origin',
        'zipcode'
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
        return PersonalDetails::class;
    }
}
