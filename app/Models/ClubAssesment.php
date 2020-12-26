<?php

namespace App\Models;

use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class ClubAssesment
 * @package App\Models
 * @version December 23, 2020, 11:09 am UTC
 *
 * @property integer $user_id
 * @property boolean $enjoy_practice_routines
 * @property boolean $is_participated_in_competitions
 * @property boolean $is_selected_to_represent
 * @property string $competitions
 * @property string $motivation
 * @property string $achievement
 * @property string $admired_sportsperson
 * @property string $top_athlete_plans
 * @property string $current_team
 * @property string|\Carbon\Carbon $date_joined_team
 * @property string $favourite_jersey_number
 * @property string $nickname
 * @property string $favourite_sports_team
 * @property string $why_like_team
 * @property integer $no_of_teams_played_for
 * @property string $why_leave
 * @property boolean $can_improve_in_team
 * @property boolean $is_like_coach_team
 * @property string $positions_play
 * @property string $preferred_foot
 */
class ClubAssesment extends Model
{

    use HasFactory;

    public $table = 'club_assesment';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'enjoy_practice_routines',
        'is_participated_in_competitions',
        'is_selected_to_represent',
        'competitions',
        'motivation',
        'achievement',
        'admired_sportsperson',
        'top_athlete_plans',
        'current_team',
        'date_joined_team',
        'favourite_jersey_number',
        'nickname',
        'favourite_sports_team',
        'why_like_team',
        'no_of_teams_played_for',
        'why_leave',
        'can_improve_in_team',
        'is_like_coach_team',
        'positions_play',
        'preferred_foot'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'enjoy_practice_routines' => 'boolean',
        'is_participated_in_competitions' => 'boolean',
        'is_selected_to_represent' => 'boolean',
        'competitions' => 'string',
        'motivation' => 'string',
        'achievement' => 'string',
        'admired_sportsperson' => 'string',
        'top_athlete_plans' => 'string',
        'current_team' => 'string',
        'date_joined_team' => 'datetime',
        'favourite_jersey_number' => 'string',
        'nickname' => 'string',
        'favourite_sports_team' => 'string',
        'why_like_team' => 'string',
        'no_of_teams_played_for' => 'integer',
        'why_leave' => 'string',
        'can_improve_in_team' => 'boolean',
        'is_like_coach_team' => 'boolean',
        'positions_play' => 'string',
        'preferred_foot' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'enjoy_practice_routines' => 'nullable|boolean',
        'is_participated_in_competitions' => 'nullable|boolean',
        'is_selected_to_represent' => 'nullable|boolean',
        'competitions' => 'nullable|string',
        'motivation' => 'nullable|string',
        'achievement' => 'nullable|string',
        'admired_sportsperson' => 'nullable|string|max:255',
        'top_athlete_plans' => 'nullable|string',
        'current_team' => 'nullable|string|max:255',
        'date_joined_team' => 'nullable',
        'favourite_jersey_number' => 'nullable|string|max:255',
        'nickname' => 'nullable|string|max:255',
        'favourite_sports_team' => 'nullable|string|max:255',
        'why_like_team' => 'nullable|string|max:255',
        'no_of_teams_played_for' => 'nullable|integer',
        'why_leave' => 'nullable|string|max:255',
        'can_improve_in_team' => 'nullable|boolean',
        'is_like_coach_team' => 'nullable|boolean',
        'positions_play' => 'nullable|string',
        'preferred_foot' => 'nullable|string',
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
