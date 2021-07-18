<?php

namespace App\Repositories;

use App\Models\Academy;
use App\Repositories\BaseRepository;

/**
 * Class AcademyRepository
 * @package App\Repositories
 * @version July 18, 2021, 3:30 pm UTC
*/

class AcademyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'reg_date',
        'profile_url',
        'academy_age',
        'capacity',
        'country_id',
        'location'
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
        return Academy::class;
    }
}
