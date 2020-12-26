<?php

namespace App\Repositories;

use App\Models\Video;
use App\Repositories\BaseRepository;

/**
 * Class VideoRepository
 * @package App\Repositories
 * @version December 23, 2020, 11:18 am UTC
*/

class VideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'type_id',
        'skill_test_id',
        'url'
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
        return Video::class;
    }
}
