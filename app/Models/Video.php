<?php

namespace App\Models;

use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class Video
 * @package App\Models
 * @version December 23, 2020, 11:18 am UTC
 *
 * @property integer $user_id
 * @property integer $type_id
 * @property integer $skill_test_id
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
        'skill_test_id',
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
        'skill_test_id' => 'integer',
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
        'skill_test_id' => 'required|integer',
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
