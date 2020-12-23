<?php

namespace App\Repositories;

use App\Models\Sport;
use App\Repositories\BaseRepository;

/**
 * Class SportRepository
 * @package App\Repositories
 * @version December 23, 2020, 11:08 am UTC
*/

class SportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Sport::class;
    }
}
