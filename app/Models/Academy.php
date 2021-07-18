<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Academy
 * @package App\Models
 * @version July 18, 2021, 3:30 pm UTC
 *
 * @property string $name
 * @property string $reg_date
 * @property string $profile_url
 * @property string $academy_age
 * @property string $capacity
 * @property integer $country_id
 * @property string $location
 */
class Academy extends AppModel
{

    use HasFactory;

    public $table = 'academies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'user_id',
        'reg_date',
        'profile_url',
        'academy_age',
        'capacity',
        'country_id',
        'location'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'reg_date' => 'date',
        'profile_url' => 'string',
        'academy_age' => 'string',
        'capacity' => 'string',
        'country_id' => 'integer',
        'location' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'reg_date' => 'nullable',
        'profile_url' => 'nullable|string|max:255',
        'academy_age' => 'nullable|string|max:255',
        'capacity' => 'nullable|string|max:255',
        'country_id' => 'nullable|integer',
        'location' => 'nullable|string|max:255',
    ];


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('Profile')
            ->singleFile();

        $this->addMediaCollection('Pictures');
    }

}
