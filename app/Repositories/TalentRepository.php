<?php

namespace App\Repositories;

use App\Models\Talent;
use App\Repositories\BaseRepository;

/**
 * Class TalentRepository
 * @package App\Repositories
 * @version July 14, 2021, 10:46 pm UTC
*/

class TalentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'profile_url',
        'qualifications',
        'scheme',
        'user_id',
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'age',
        'gender',
        'languages',
        'city_id',
        'genotype',
        'blood_group',
        'sports',
        'positions',
        'educational_background',
        'nationality',
        'height',
        'weight'
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
        return Talent::class;
    }
}
