<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class Talent
 * @package App\Models
 * @version July 14, 2021, 10:46 pm UTC
 *
 * @property string $profile_url
 * @property string $qualifications
 * @property string $scheme
 * @property integer $user_id
 * @property string $email
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $dob
 * @property integer $age
 * @property string $gender
 * @property string $languages
 * @property string $city_id
 * @property string $genotype
 * @property string $blood_group
 * @property string $sports
 * @property string $positions
 * @property string $educational_background
 * @property string $nationality
 * @property number $height
 * @property number $weight
 */
class Talent extends AppModel
{

    use HasFactory;

    public $table = 'talent';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'profile_url',
        'qualifications',
        'scheme',
        'user_id',
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'age',
        'gender',
        'languages',
        'city_id',
        'genotype',
        'blood_group',
        'sports',
        'positions',
        'educational_background',
        'nationality',
        'height',
        'weight'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'profile_url' => 'string',
        'qualifications' => 'string',
        'scheme' => 'string',
        'user_id' => 'integer',
        'email' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'dob' => 'date',
        'age' => 'integer',
        'gender' => 'string',
        'languages' => 'string',
        'city_id' => 'string',
        'genotype' => 'string',
        'blood_group' => 'string',
        'sports' => 'string',
        'positions' => 'string',
        'educational_background' => 'string',
        'nationality' => 'string',
        'height' => 'float',
        'weight' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'profile_url' => 'nullable|string|max:255',
        'qualifications' => 'nullable|string|max:255',
        'scheme' => 'nullable|string|max:255',
        'user_id' => 'nullable|integer',
        'email' => 'nullable|string|max:255',
        'first_name' => 'nullable|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'dob' => 'nullable',
        'age' => 'nullable|integer',
        'gender' => 'nullable|string|max:255',
        'languages' => 'nullable|string|max:255',
        'city_id' => 'nullable|string|max:255',
        'genotype' => 'nullable|string|max:255',
        'blood_group' => 'nullable|string|max:255',
        'sports' => 'nullable|string',
        'positions' => 'nullable|string',
        'educational_background' => 'nullable|string',
        'nationality' => 'nullable|string|max:255',
        'height' => 'nullable|numeric',
        'weight' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('Profile')
            ->singleFile();

        $this->addMediaCollection('Educational Background');
    }

    public function theMedia()
    {
        return $this->hasOne('Spatie\MediaLibrary\MediaCollections\Models\Media', 'model_id')
            ->where('model_type', 'App\Models\Talent');
    }

}
