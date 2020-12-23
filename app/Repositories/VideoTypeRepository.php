<?php

namespace App\Repositories;

use App\Models\VideoType;
use App\Repositories\BaseRepository;

/**
 * Class VideoTypeRepository
 * @package App\Repositories
 * @version December 23, 2020, 11:07 am UTC
*/

class VideoTypeRepository extends BaseRepository
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
        return VideoType::class;
    }
}
