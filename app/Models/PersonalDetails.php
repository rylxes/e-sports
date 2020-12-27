<?php

namespace App\Models;

use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class PersonalDetails
 * @package App\Models
 * @version December 23, 2020, 11:05 am UTC
 *
 * @property integer $user_id
 * @property string $first_name
 * @property string $marital_status
 * @property string $mother_maiden_name
 * @property string $last_name
 * @property string $height
 * @property string $body_weight
 * @property string $phone
 * @property string $sm_handle
 * @property string $highest_education
 * @property string $place_of_birth
 * @property string $school
 * @property string $career_preference
 * @property boolean $is_still_schooling
 * @property string $contact_address
 * @property string|\Carbon\Carbon $dob
 * @property integer $country_id
 * @property integer $state_of_origin
 * @property integer $zipcode
 */
class PersonalDetails extends Model
{

    use HasFactory;

    public $table = 'personal_details';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'first_name',
        'marital_status',
        'mother_maiden_name',
        'last_name',
        'height',
        'body_weight',
        'phone',
        'sm_handle',
        'highest_education',
        'place_of_birth',
        'school',
        'career_preference',
        'is_still_schooling',
        'contact_address',
        'dob',
        'country_id',
        'state_of_origin',
        'zipcode'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'first_name' => 'string',
        'marital_status' => 'string',
        'mother_maiden_name' => 'string',
        'last_name' => 'string',
        'height' => 'string',
        'body_weight' => 'string',
        'phone' => 'string',
        'sm_handle' => 'string',
        'highest_education' => 'string',
        'place_of_birth' => 'string',
        'school' => 'string',
        'career_preference' => 'string',
        'is_still_schooling' => 'boolean',
        'contact_address' => 'string',
        'dob' => 'datetime',
        'country_id' => 'integer',
        'state_of_origin' => 'integer',
        'zipcode' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'first_name' => 'nullable|string|max:255',
        'marital_status' => 'nullable|string|max:255',
        'mother_maiden_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'height' => 'nullable|string|max:255',
        'body_weight' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'sm_handle' => 'nullable|string|max:255',
        'highest_education' => 'nullable|string',
        'place_of_birth' => 'nullable|string|max:255',
        'school' => 'nullable|string|max:255',
        'career_preference' => 'nullable|string|max:255',
        'is_still_schooling' => 'nullable|boolean',
        'contact_address' => 'nullable|string',
        'dob' => 'nullable',
        'country_id' => 'nullable|integer',
        'state_of_origin' => 'nullable|integer',
        'zipcode' => 'nullable|integer',
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
            if(Auth::check()){
                $model->user_id = Auth::user()->id;
            }
        });
        self::saving(function ($model) {
            if(Auth::check()){
                $model->user_id = Auth::user()->id;
            }
        });
    }


}
