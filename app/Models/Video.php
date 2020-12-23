<?php

namespace App\Models;

use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class Video
 * @package App\Models
 * @version December 23, 2020, 11:06 am UTC
 *
 * @property integer $user_id
 * @property integer $type_id
 * @property integer $sport_id
 * @property string $skill_test
 * @property string $url
 */
class Video extends Model
{

    use HasFactory;

    public $table = 'videos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'type_id',
        'sport_id',
        'skill_test',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'type_id' => 'integer',
        'sport_id' => 'integer',
        'skill_test' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'type_id' => 'required|integer',
        'sport_id' => 'required|integer',
        'skill_test' => 'required|string|max:255',
        'url' => 'required|string|max:255',
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
