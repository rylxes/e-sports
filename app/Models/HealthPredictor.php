<?php

namespace App\Models;

use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class HealthPredictor
 * @package App\Models
 * @version December 23, 2020, 11:08 am UTC
 *
 * @property integer $user_id
 * @property string $blood_group
 * @property boolean $is_hereditary_issue
 * @property boolean $is_current_health_injury
 * @property boolean $is_receiving_treatment
 * @property boolean $is_long_term_injury
 * @property string $hereditary_issue
 * @property string $long_term_injury
 * @property string $treatment_type
 * @property string $current_health_injury
 * @property boolean $is_personal_health_challenge
 * @property string $personal_health_challenge
 * @property string $injury_seriousness
 * @property string $medical_treatment
 * @property string $injury_location
 * @property string $genotype
 */
class HealthPredictor extends Model
{

    use HasFactory;

    public $table = 'health_predictor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'blood_group' => 'string',
        'is_hereditary_issue' => 'boolean',
        'is_current_health_injury' => 'boolean',
        'is_receiving_treatment' => 'boolean',
        'is_long_term_injury' => 'boolean',
        'hereditary_issue' => 'string',
        'long_term_injury' => 'string',
        'treatment_type' => 'string',
        'current_health_injury' => 'string',
        'is_personal_health_challenge' => 'boolean',
        'personal_health_challenge' => 'string',
        'injury_seriousness' => 'string',
        'medical_treatment' => 'string',
        'injury_location' => 'string',
        'genotype' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'blood_group' => 'nullable|string|max:255',
        'is_hereditary_issue' => 'nullable|boolean',
        'is_current_health_injury' => 'nullable|boolean',
        'is_receiving_treatment' => 'nullable|boolean',
        'is_long_term_injury' => 'nullable|boolean',
        'hereditary_issue' => 'nullable|string|max:255',
        'long_term_injury' => 'nullable|string|max:255',
        'treatment_type' => 'nullable|string|max:255',
        'current_health_injury' => 'nullable|string|max:255',
        'is_personal_health_challenge' => 'nullable|boolean',
        'personal_health_challenge' => 'nullable|string|max:255',
        'injury_seriousness' => 'nullable|string',
        'medical_treatment' => 'nullable|string',
        'injury_location' => 'nullable|string',
        'genotype' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new UserScope());
        self::creating(function ($model) {
            $model->user_id = Auth::user()->id;
        });
        self::saving(function ($model) {
            $model->user_id = Auth::user()->id;
        });
    }

    
}
