<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Nuritionist
 * @package App\Models
 * @version July 25, 2021, 1:26 am UTC
 *
 * @property string $profile_url
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $dob
 * @property string $gender
 * @property string $language
 * @property string $nationality
 * @property string $city_id
 * @property integer $user_id
 * @property string $email
 * @property string $employment_type
 * @property string $qualifications
 */
class Nuritionist extends AppModel
{

    use HasFactory;

    public $table = 'nuritionist';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'profile_url',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'gender',
        'language',
        'nationality',
        'city_id',
        'user_id',
        'email',
        'employment_type',
        'qualifications'
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
        'language' => 'string',
        'nationality' => 'string',
        'city_id' => 'string',
        'user_id' => 'integer',
        'email' => 'string',
        'employment_type' => 'string',
        'qualifications' => 'string'
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
        'language' => 'nullable|string',
        'nationality' => 'nullable|string',
        'city_id' => 'nullable|string|max:255',
        'user_id' => 'nullable|integer',
        'email' => 'nullable|string|max:255',
        'employment_type' => 'nullable|string|max:255',
        'qualifications' => 'nullable|string|max:255',
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
