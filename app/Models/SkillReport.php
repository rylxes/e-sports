<?php

namespace App\Models;

use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class SkillReport
 * @package App\Models
 * @version December 23, 2020, 11:10 am UTC
 *
 * @property integer $user_id
 * @property string $speed
 * @property string $passing
 * @property string $shooting
 * @property string $dribbling
 * @property string $heading
 * @property string $ball_control
 * @property string $fitness
 * @property string $movement
 * @property string $awareness
 * @property string $decisions
 * @property string $workrate
 * @property string $strength
 * @property string $crossing
 * @property string $finishing
 * @property string $positioning
 * @property string $anticipation
 * @property string $total
 * @property string $overall_grade
 */
class SkillReport extends Model
{

    use HasFactory;

    public $table = 'skill_report';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'speed' => 'string',
        'passing' => 'string',
        'shooting' => 'string',
        'dribbling' => 'string',
        'heading' => 'string',
        'ball_control' => 'string',
        'fitness' => 'string',
        'movement' => 'string',
        'awareness' => 'string',
        'decisions' => 'string',
        'workrate' => 'string',
        'strength' => 'string',
        'crossing' => 'string',
        'finishing' => 'string',
        'positioning' => 'string',
        'anticipation' => 'string',
        'total' => 'string',
        'overall_grade' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'speed' => 'nullable|string',
        'passing' => 'nullable|string',
        'shooting' => 'nullable|string',
        'dribbling' => 'nullable|string',
        'heading' => 'nullable|string',
        'ball_control' => 'nullable|string',
        'fitness' => 'nullable|string',
        'movement' => 'nullable|string',
        'awareness' => 'nullable|string',
        'decisions' => 'nullable|string',
        'workrate' => 'nullable|string',
        'strength' => 'nullable|string',
        'crossing' => 'nullable|string',
        'finishing' => 'nullable|string',
        'positioning' => 'nullable|string',
        'anticipation' => 'nullable|string',
        'total' => 'nullable|string|max:255',
        'overall_grade' => 'nullable|string',
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
