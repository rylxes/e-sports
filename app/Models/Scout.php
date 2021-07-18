<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Scout
 * @package App\Models
 * @version July 18, 2021, 3:29 pm UTC
 *
 * @property string $profile_url
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $dob
 * @property string $gender
 * @property string $scouting_age
 * @property string $scouting_gender
 * @property string $sports
 * @property string $specialization
 * @property string $language
 * @property string $nationality
 * @property string $city_id
 * @property integer $user_id
 * @property string $email
 * @property string $employment_type
 * @property string $scouting_level
 * @property string $qualifications
 * @property string $team_club
 */
class Scout extends AppModel
{

    use HasFactory;

    public $table = 'scouts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'profile_url',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'gender',
        'scouting_age',
        'scouting_gender',
        'sports',
        'specialization',
        'language',
        'nationality',
        'city_id',
        'user_id',
        'email',
        'employment_type',
        'scouting_level',
        'qualifications',
        'team_club'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'profile_url' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'dob' => 'date',
        'gender' => 'string',
        'scouting_age' => 'string',
        'scouting_gender' => 'string',
        'sports' => 'string',
        'specialization' => 'string',
        'language' => 'string',
        'nationality' => 'string',
        'city_id' => 'string',
        'user_id' => 'integer',
        'email' => 'string',
        'employment_type' => 'string',
        'scouting_level' => 'string',
        'qualifications' => 'string',
        'team_club' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'profile_url' => 'nullable|string|max:255',
        'first_name' => 'nullable|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'dob' => 'nullable',
        'gender' => 'nullable|string|max:255',
        'scouting_age' => 'nullable|string|max:255',
        'scouting_gender' => 'nullable|string|max:255',
        'sports' => 'nullable|string',
        'specialization' => 'nullable|string',
        'language' => 'nullable|string',
        'nationality' => 'nullable|string',
        'city_id' => 'nullable|string|max:255',
        'user_id' => 'nullable|integer',
        'email' => 'nullable|string|max:255',
        'employment_type' => 'nullable|string|max:255',
        'scouting_level' => 'nullable|string|max:255',
        'qualifications' => 'nullable|string|max:255',
        'team_club' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

      public function registerMediaCollections(): void
    {
        $this->addMediaCollection('Profile')
            ->singleFile();

        $this->addMediaCollection('License');
    }


}
