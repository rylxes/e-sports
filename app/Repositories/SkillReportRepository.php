<?php

namespace App\Repositories;

use App\Models\SkillReport;
use App\Repositories\BaseRepository;

/**
 * Class SkillReportRepository
 * @package App\Repositories
 * @version December 23, 2020, 11:10 am UTC
*/

class SkillReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'speed',
        'passing',
        'shooting',
        'dribbling',
        'heading',
        'ball_control',
        'fitness',
        'movement',
        'awareness',
        'decisions',
        'workrate',
        'strength',
        'crossing',
        'finishing',
        'positioning',
        'anticipation',
        'total',
        'overall_grade'
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
        return SkillReport::class;
    }
}
