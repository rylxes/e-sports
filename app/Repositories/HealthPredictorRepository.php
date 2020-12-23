<?php

namespace App\Repositories;

use App\Models\HealthPredictor;
use App\Repositories\BaseRepository;

/**
 * Class HealthPredictorRepository
 * @package App\Repositories
 * @version December 23, 2020, 11:08 am UTC
*/

class HealthPredictorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'blood_group',
        'is_hereditary_issue',
        'is_current_health_injury',
        'is_receiving_treatment',
        'is_long_term_injury',
        'hereditary_issue',
        'long_term_injury',
        'treatment_type',
        'current_health_injury',
        'is_personal_health_challenge',
        'personal_health_challenge',
        'injury_seriousness',
        'medical_treatment',
        'injury_location',
        'genotype'
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
        return HealthPredictor::class;
    }
}
