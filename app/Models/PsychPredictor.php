<?php

namespace App\Models;

use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class PsychPredictor
 * @package App\Models
 * @version December 23, 2020, 11:08 am UTC
 *
 * @property integer $user_id
 * @property integer $time_practice_in_week
 * @property integer $hours_practice_in_week
 * @property boolean $is_parent_in_support
 * @property boolean $is_team_player
 * @property string $parent_in_support_reason
 * @property string $challenges
 * @property string $greatest_motivation
 * @property string $strength
 * @property string $weakness
 * @property boolean $can_overcome_challenges
 * @property string $time_start_sport
 * @property string $rating_sports
 */
class PsychPredictor extends Model
{

    use HasFactory;

    public $table = 'psych_predictor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'time_practice_in_week',
        'hours_practice_in_week',
        'is_parent_in_support',
        'is_team_player',
        'parent_in_support_reason',
        'challenges',
        'greatest_motivation',
        'strength',
        'weakness',
        'can_overcome_challenges',
        'time_start_sport',
        'rating_sports'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'time_practice_in_week' => 'integer',
        'hours_practice_in_week' => 'integer',
        'is_parent_in_support' => 'boolean',
        'is_team_player' => 'boolean',
        'parent_in_support_reason' => 'string',
        'challenges' => 'string',
        'greatest_motivation' => 'string',
        'strength' => 'string',
        'weakness' => 'string',
        'can_overcome_challenges' => 'boolean',
        'time_start_sport' => 'string',
        'rating_sports' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'time_practice_in_week' => 'required|integer',
        'hours_practice_in_week' => 'required|integer',
        'is_parent_in_support' => 'nullable|boolean',
        'is_team_player' => 'nullable|boolean',
        'parent_in_support_reason' => 'nullable|string|max:255',
        'challenges' => 'nullable|string|max:255',
        'greatest_motivation' => 'nullable|string|max:255',
        'strength' => 'nullable|string|max:255',
        'weakness' => 'nullable|string|max:255',
        'can_overcome_challenges' => 'nullable|boolean',
        'time_start_sport' => 'nullable|string',
        'rating_sports' => 'nullable|string',
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
