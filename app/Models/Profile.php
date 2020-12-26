<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Profile
 * @package App\Models
 * @version December 26, 2020, 10:41 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property integer $user_id
 * @property string $avatar
 */
class Profile extends Model
{

    use HasFactory;

    public $table = 'profiles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'avatar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'user_id' => 'integer',
        'avatar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'user_id' => 'required|integer',
        'avatar' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
