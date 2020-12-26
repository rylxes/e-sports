<?php

namespace App\Repositories;

use App\Models\SkillTest;
use App\Repositories\BaseRepository;

/**
 * Class SkillTestRepository
 * @package App\Repositories
 * @version December 23, 2020, 11:19 am UTC
*/

class SkillTestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'sport_id'
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
        return SkillTest::class;
    }
}
